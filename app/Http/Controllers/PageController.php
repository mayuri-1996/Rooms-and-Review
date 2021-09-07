<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\OtherFeature;
use App\Model\PropertyType;
use App\Model\Country;
use App\Model\Zone;
use App\Model\ZoneCity;
use App\Model\Buyer;
use App\Model\Property;
use App\Model\PropertyAddress;
use App\Model\PropertyToOtherFeature;
use App\Model\Image;
use App\Model\PropertyVideo;
use App\Model\ApplyForRent;
use App\Model\PostPropertyRequest;
use Auth;
use Session;
use Illuminate\Support\Facades\Cookie;

class PageController extends Controller
{
    public function index(Request $request){
        // dd(Auth::user());
        $random_properties = Property::
                    with(
                        'properties_to_buyers',
                        'properties_to_property_to_other_features',
                        'properties_to_property_addresses',
                        'properties_to_images'
                    )
                    ->when($request->state_id != '', function ($query) use ($request) {
                        $query->whereHas('properties_to_property_addresses', function($q)use ($request){
                            $q->where('state', $request->state_id);
                        });
                    })
                    ->when($request->city_id != '', function ($query) use ($request) {
                        $query->whereHas('properties_to_property_addresses', function($q)use ($request){
                            $q->where('city', $request->city_id);
                        });
                    })
                    ->get();

        $property_by_location = array();

        if(Auth::user()){
            $property_by_location = Property::
            with(
                'properties_to_buyers',
                'properties_to_property_to_other_features',
                'properties_to_property_addresses',
                'properties_to_images'
            )
            ->whereHas('properties_to_property_addresses', function ($q){
                $q->where('state', Auth::user()->state)
                ->where('city', Auth::user()->city);
            })
            ->get();
        }
        
        $property_by_search = array();
        if(!Auth::user()){
            $state_id = request()->cookie('state_id');
            $city_id = request()->cookie('city_id');
            // dd($city_id);
            $property_by_search = Property::
            with(
                'properties_to_buyers',
                'properties_to_property_to_other_features',
                'properties_to_property_addresses',
                'properties_to_images'
            )
            ->when($city_id != null, function ($query) use ($city_id) {
                $query->whereHas('properties_to_property_addresses', function($q)use ($city_id){
                    $q->where('city', $city_id);
                });
            })
            ->when($state_id != null, function ($query) use ($state_id) {
                $query->whereHas('properties_to_property_addresses', function($q)use ($state_id){
                    $q->where('state', $state_id);
                });
            })
            ->take(3)
            ->get();
            
        }
        // dd(count($property_by_search));
        
        $states = Zone::with('zones_to_zone_cities')->get();
        $cities = ZoneCity::with('zone_cities_to_zones')->get();
        // dd($states);
        return view('pages.index')->with([
            'random_properties' => $random_properties,
            'states' => $states,
            'cities' => $cities,
            'property_by_location' => $property_by_location,
            'property_by_search' => $property_by_search
        ]);
    }
    public function contact(){
        $states = Zone::get();
        return view('pages.contact')->with([
            'states' => $states
        ]);
    }
    public function about(){
        $states = Zone::get();
        return view('pages.about')->with([
            'states' => $states
        ]);
    }
    public function addproperty(){
        $states = Zone::get();
        $countries = Country::get();
        return view('pages.addproperty')->with([
            'states' => $states,
            'countries' => $countries,
        ]);
    }
    public function postAddProperty(Request $request){
        $post = new PostPropertyRequest();
        $post->user_id = Auth::user()->id;
        $post->address = $request->address;
        $post->is_agree = 1;
        $post->save();
        return redirect()->route('pages.index');
    }

    public function myproperty(){
        $states = Zone::get();
        return view('pages.myproperty')->with([
            'states' => $states
        ]);
    }
    public function dashboard(){
        $states = Zone::get();
        return view('pages.dashboard')->with([
            'states' => $states
        ]);
    }
    public function propertydetails($id){
        $states = Zone::get();

        if(Auth::user()){
            $splitName = explode(' ', Auth::user()->name, 2); // Restricts it to only 2 values, for names like Billy Bob Jones

            $first_name = $splitName[0];
            $last_name = !empty($splitName[1]) ? $splitName[1] : '';
            $abbName = $first_name[0].$last_name[0];
        }else{
            $abbName = '';
        }
        
        $property = Property::
                    with(
                        'properties_to_buyers',
                        'properties_to_property_to_other_features',
                        'properties_to_property_addresses',
                        'properties_to_images',
                        'properties_to_property_types'
                    )
                    ->where('id', $id)
                    ->first();
        return view('pages.propertydetails')->with([
            'property' => $property,
            'abbName' => $abbName,
            'states' => $states
        ]);
    }

    public function applyForRent(Request $request){
        if(ApplyForRent::where('property_id',$request->property_id)->first()){
            return back()->withSuccess(['You have already applied this property.']);
        }else{
            $rent = new ApplyForRent();
            $rent->user_id = Auth::user()->id;
            $rent->property_id = $request->property_id;
            $rent->description = $request->description;
            $rent->save();
            return back()->withSuccess(['You have successfully applied this property.']);
        }
        
    }

    public function propertylisting(Request $request){
        // dd(implode('%',str_split(str_replace(" ","",$request->street_name))));
        if(!Auth::user()){
            // \Session::put('state_id', $request->state_id);
            // \Session::put('city_id', $request->city_id);
            Cookie::queue('state_id', $request->state_id, 45000);
            Cookie::queue('city_id', $request->city_id, 45000);
        }
       
        // dd(\Session::get('city_id'));
        $searched_properties = Property::
                    with(
                        'properties_to_buyers',
                        'properties_to_property_to_other_features',
                        'properties_to_property_addresses',
                        'properties_to_images'
                    )
                    ->when($request->city_id != '', function ($query) use ($request) {
                        $query->whereHas('properties_to_property_addresses', function($q)use ($request){
                            $q->where('city', $request->city_id);
                        });
                    })
                    ->when($request->state_id != '', function ($query) use ($request) {
                        $query->whereHas('properties_to_property_addresses', function($q)use ($request){
                            $q->where('state', $request->state_id);
                        });
                    })
                    ->when($request->street_name != '', function ($query) use ($request) {
                        $query->whereHas('properties_to_property_addresses', function($q)use ($request){
                            $q->where('street_name', 'like',  '%' .implode('%',str_split(str_replace(" ","",$request->street_name))). '%');
                        });
                    })
                    ->paginate(10);
        // dd($random_properties);
        $states = Zone::get();
        return view('pages.propertylisting')->with([
            'states' => $states,
            'searched_properties' => $searched_properties
        ]);
    }
    public function myprofile(){
        $states = Zone::get();
        return view('pages.myprofile')->with([
            'states' => $states
        ]);
    }
    public function changepassword(){
        $states = Zone::get();
        return view('pages.changepassword')->with([
            'states' => $states
        ]);
    }
    public function bookmarklisting(){
        $states = Zone::get();
        return view('pages.bookmarklisting')->with([
            'states' => $states
        ]);
    }
    public function blog(){
        $states = Zone::get();
        return view('pages.blog')->with([
            'states' => $states
        ]);
    }
    public function register(){
        $states = Zone::get();
        $cities = ZoneCity::with('zone_cities_to_zones')->get();
        return view('pages.register')->with([
            'states' => $states,
            'cities' => $cities
        ]);
    }
    public function login(){
        $states = Zone::get();
        return view('pages.login')->with([
            'states' => $states
        ]);
    }
}
