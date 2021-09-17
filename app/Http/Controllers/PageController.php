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
use App\Model\LikedProperty;
use App\Model\SearchHistory;
use App\Model\UserPreferenceCity;
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

        $property_by_location = collect();

        if(Auth::user()){
            // $property_by_location = Property::
            // with(
            //     'properties_to_buyers',
            //     'properties_to_property_to_other_features',
            //     'properties_to_property_addresses',
            //     'properties_to_images'
            // )
            // ->whereHas('properties_to_property_addresses', function ($q){
            //     $q->where('state', Auth::user()->state)
            //     ->where('city', Auth::user()->city);
            // })
            // ->get();

            $property_by_location = $this->listPreferedCityProperty();

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
        }else{
            $property_by_search = $this->listHistoryProperty();
        }
        
        $states = Zone::with('zones_to_zone_cities')->get();
        $cities = ZoneCity::with('zone_cities_to_zones')->get();

        return view('pages.index')->with([
            'random_properties' => $random_properties,
            'states' => $states,
            'cities' => $cities,
            'property_by_location' => $property_by_location,
            'property_by_search' => $property_by_search
        ]);
    }

    public function addHistory($property_id, $state_id, $city_id){
        if(SearchHistory::where('property_id',$property_id)->where('user_id',Auth::user()->id)->first()){
            SearchHistory::where('property_id',$property_id)->where('user_id',Auth::user()->id)
            ->update([
                'last_visited' => date("Y-m-d H:i:s")
            ]);
        }else{
            $history = [
                'user_id' => Auth::user()->id,
                'property_id' => $property_id,
                'state_id' => $state_id,
                'city_id' => $city_id,
                'last_visited' => date("Y-m-d H:i:s"),
            ];
            $response = SearchHistory::insert($history);
            return $response;
        }       
    }

    public function listHistoryProperty(){
        $lists = SearchHistory::with('search_histories_to_properties')
            ->where('user_id',Auth::user()->id)->inRandomOrder()->limit(3)->get();
        return $lists;
    }

    public function listPreferedCityProperty(){
        $lists = UserPreferenceCity::with('user_preference_cities_to_zone_cities')
                ->where('user_id', Auth::user()->id)
                ->first();
        $property_by_location = Property::
            with(
                'properties_to_buyers',
                'properties_to_property_to_other_features',
                'properties_to_property_addresses',
                'properties_to_images'
            )
            ->whereHas('properties_to_property_addresses', function ($q) use ($lists){
                $q->where('city', $lists->city_id);
            })
            ->inRandomOrder()->limit(3)->get();
        return $property_by_location;
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
        // dd($request->all());
        $messsages = array(
            'country_id.required' => 'You cant leave Country field empty',
            'state_id.required' => 'You cant leave State field empty',
            'city_id.required' => 'You cant leave City field empty',
            'land_mark.required' => 'Please enter land mark',
            'address.required' => 'Please enter your address',
            'front_image.required' => "You must use the 'Choose file' button to select which front image you wish to upload",
            'front_image.max' => "Maximum front image file size to upload is 50KB. If you are uploading a image, try to reduce its resolution to make it under 50KB",
            'room_image.required' => "You must use the 'Choose file' button to select which room image you wish to upload",
            'room_image.max' => "Maximum room image file size to upload is 50KB. If you are uploading a image, try to reduce its resolution to make it under 50KB",
            'room_video.required' => "You must use the 'Choose file' button to select which room video you wish to upload",
            'room_video.max' => "Maximum file size to upload is 10MB (10240 KB). If you are uploading a video, try to reduce its resolution to make it under 10MB"
        );

        $validated = $request->validate([
            'country_id' => 'required',
            'state_id' => 'required',
            'city_id' => 'required',
            'land_mark' => 'required',
            'address' => 'required',
            'front_image' => 'mimes:jpeg,jpg,png,gif|required|max:50' ,// max 10000kb
            'room_image' => 'mimes:jpeg,jpg,png,gif|required|max:50', // max 10000kb
            'room_video'  => 'mimes:mp4,mov,ogg,qt|required| max:10240'
        ], $messsages);
        
    
        $post = new PostPropertyRequest();
        $post->user_id = Auth::user()->id;
        $post->alt_phone = $request->alt_phone;
        $post->country = $request->country_id;
        $post->state = $request->state_id;
        $post->city = $request->city_id;
        $post->land_mark = $request->land_mark;
        $post->address = $request->address;
        $post->is_agree = 1;
        
        // dd($request->all());
        if($request->hasFile('front_image'))
        {
            $files = $request->file('front_image');
            $destinationPath = public_path('/uplaods/front_image/'); // upload path
            $frontImage = $files->getClientOriginalName();
            $files->move($destinationPath, $frontImage);
        }
        $post->front_image = $frontImage;

        if($request->hasFile('room_image'))
        {
            $files = $request->file('room_image');
            $destinationPath = public_path('/uplaods/room_image/'); // upload path
            $roomImage = $files->getClientOriginalName();
            $files->move($destinationPath, $roomImage);
        }
        $post->room_image = $roomImage;

        if($request->hasFile('room_video'))
        {
            $files = $request->file('room_video');
            $destinationPath = public_path('/uplaods/videos/'); // upload path
            $roomVideo = $files->getClientOriginalName();
            $files->move($destinationPath, $roomVideo);
        }
        $post->room_video = $roomVideo;

        $post->save();
        
        return back()->with('message', 'WORKS!');
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

            $liked = LikedProperty::
                    where('property_id', $id)
                    ->where('user_id',Auth::user()->id)
                    ->first('is_liked');
            if($liked){
                $is_liked = $liked->is_liked;
            }else{
                $is_liked = 0;
            }

            if(ApplyForRent::where('property_id',$id)->where('user_id', Auth::user()->id)->first()){
                $is_applied_for_rent = true;
            }else{
                $is_applied_for_rent = false;
            }

        }else{
            $abbName = '';
            $is_liked = 0;
            $is_applied_for_rent = false;
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
                    // dd($property);
        if(Auth::user()){
            $city_id = $property->properties_to_property_addresses->city;
            $state_id = $property->properties_to_property_addresses->state;
            $this->addHistory($id, $state_id, $city_id);
        }
        return view('pages.propertydetails')->with([
            'property' => $property,
            'abbName' => $abbName,
            'states' => $states,
            'is_liked' => $is_liked,
            'is_applied_for_rent' => $is_applied_for_rent
        ]);
    }

    public function applyForRent(Request $request){

        $rent = new ApplyForRent();
        $rent->user_id = Auth::user()->id;
        $rent->property_id = $request->data['property_id'];
        $rent->description = $request->data['description'];
        $rent->save();
        return response()->json('success');
        // return back()->withSuccess(['You have successfully applied this property.']);
        
    }

    public function propertylisting(Request $request){
        // dd(implode('%',str_split(str_replace(" ","",$request->street_name))));

        $property_types = PropertyType::get();

        if($request->search_history != ''){
            $searched_properties = SearchHistory::with('search_histories_to_properties')
            ->when($request->property_type != '', function ($query) use ($request) {
                $query->whereHas('search_histories_to_properties', function($q)use ($request){
                    $q->where('property_type_id', $request->property_type);
                });
            })
            ->when($request->prices != '', function ($query) use ($request) {
                $query->whereHas('search_histories_to_properties', function($q)use ($request){
                    $q->where('property_price', $request->prices);
                });
            })
            ->where('user_id',Auth::user()->id)
            ->orderBy('last_visited', 'DESC')
            ->paginate(10);           
        }else{
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
                    ->when($request->property_type != '', function ($query) use ($request) {
                        $query->where('property_type_id', $request->property_type);
                    })
                    ->when($request->prices != '', function ($query) use ($request) {
                        $query->where('property_price', $request->prices);
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
        }
        
        
        // dd($searched_properties);
        $states = Zone::get();
        return view('pages.propertylisting')->with([
            'states' => $states,
            'searched_properties' => $searched_properties,
            'property_types' => $property_types
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

    public function likeProperty(Request $request){
        $is_liked = LikedProperty::where('property_id',$request->property_id)->first();
        if($is_liked){
            $is_liked->is_liked = $request->is_liked;
            $is_liked->save();
            return response()->json('disliked');
        }else{
            $liked = new LikedProperty();
            $liked->user_id = Auth::user()->id;
            $liked->property_id = $request->property_id;
            $liked->is_liked = $request->is_liked;
            $liked->save();
            return response()->json('liked');
        }       
    }
    public function disLikeProperty(Request $request){
        $liked = LikedProperty::where('property_id',$request->property_id)->first();
        $liked->is_liked = 0;
        $liked->save();
        return response()->json($liked);
    }
}
