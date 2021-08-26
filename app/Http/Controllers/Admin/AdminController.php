<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Admin;
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
use App\Traits\UploadTrait;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    // public function dashBoard(){
    //     return view('admin-panel.pages.dashboard');
    // }

    use UploadTrait;

    public function allAdmin(){
        $admins = Admin::get();
        return view('admin-panel.pages.admin-list')->with([
            'admins' => $admins
        ]);
    }

    public function allBuyerOrOwner(){
        return view('admin-panel.pages.buyerOwner.all-buyer-owner');
    }

    public function userProfile(){
        return view('admin-panel.pages.profile.user-profile');
    }

    public function allProperty(){
        $properties = Property::
                    with(
                        'properties_to_buyers',
                        'properties_to_property_to_other_features',
                        'properties_to_property_addresses',
                        'properties_to_images'
                    )
                    ->get();
        // dd($properties);
        return view('admin-panel.pages.properties.all')->with([
            'properties' => $properties
        ]);
    }

    public function addProperty(){
        $others_feachures = OtherFeature::get();
        $types = PropertyType::get();
        $countries = Country::get();
        $users =  PostPropertyRequest::with('post_property_requests_to_buyers')->where('is_active',0)->get();

        return view('admin-panel.pages.properties.add')->with([
            'others_feachures' => $others_feachures,
            'types' => $types,
            'countries' => $countries,
            'users' => $users
        ]);
    }
    public function postProperty(Request $request){

        $propertyData = [
            'user_id' => $request->owner_id,
            'property_title' => $request->property_title,
            'property_status' => $request->property_status,
            'property_type_id' => $request->propert_type,
            'property_price' => $request->propety_price,
            'property_area' => $request->property_area . ' ' . $request->property_area_measure,
            'no_of_bedrooms' => $request->no_of_bedrooms,
            'no_of_bathrooms' => $request->no_of_bathrooms,
            'building_age' => $request->building_age . ' ' . $request->building_age_status,
            'no_of_garage' => $request->no_of_garage,
            'detailed_info' => $request->property_desc,
            'is_active' => '1',
            'created_at' => date('Y-m-d H:i:s')
        ];

        $property_id = Property::insertGetId($propertyData);

        $property_address_data = [
            'property_id' => $property_id,
            'country' => $request->property_country,
            'state' => $request->property_state,
            'city' => $request->property_city,
            'pincode' => $request->property_zipcode,
            'street_name' => $request->property_address,
            'land_mark' => $request->property_land_mark,
            'created_at' => date('Y-m-d H:i:s')
        ];
        PropertyAddress::insert($property_address_data);

        foreach($request->other_feachure as $key=>$data){ 
            $other_feachure = new PropertyToOtherFeature();
            $other_feachure->property_id = $property_id;
            $other_feachure->other_feature_id = $data;
            $other_feachure->created_at = date('Y-m-d H:i:s');
            $other_feachure->save();
        }


        if($request->hasFile('image'))
        {
            $files = $request->file('image');
            $destinationPath = public_path('/uplaods/'); // upload path
            foreach($files as $img) {
                // Upload Orginal Image
                $propertyImage = $img->getClientOriginalName();
                $img->move($destinationPath, $propertyImage);

                $property_image = new Image();
                $property_image->property_id = $property_id;
                $property_image->big_img = $propertyImage;
                $property_image->save();
            }
        }

        if($request->hasFile('video'))
        {
            $files = $request->file('video');
            $destinationPath = public_path('/uplaods/videos/'); // upload path
            foreach($files as $img) {
                // Upload Orginal Image
                $property_video = $img->getClientOriginalName();
                $img->move($destinationPath, $property_video);

                $property_video = new PropertyVideo();
                $property_video->property_id = $property_id;
                $property_video->video_url= $property_video;
                $property_video->save();
            }
        }

        PostPropertyRequest::where('user_id',$request->owner_id)
                    ->update([
                        'is_active'     => '1',
                        'property_id' => $property_id
                    ]);

        return redirect()->route('admin.all.property');
    }

    public function allPropertyType(){
        $types = PropertyType::get();
        return view('admin-panel.pages.properties.all-property-type')->with([
            'types' => $types
        ]);
    }

    public function addPropertyType(){
        return view('admin-panel.pages.properties.add-property-type');
    }
    public function postPropertyType(Request $request){
        foreach($request->all()['name'] as $key=>$data){ 
            // if(PropertyType::where('name',$data)){
            //     return back()->withErrors([$data.' already exists.']);
            // }
            $feachure = new PropertyType();
            $feachure->name = $data;
            $feachure->save();
        }
        return redirect()->route('admin.all.propertytype');
    }

    public function allOtherFeachures(){
        $feachures = OtherFeature::get();
        return view('admin-panel.pages.otherFeachures.all')->with([
            'feachures' => $feachures
        ]);
    }
    public function addOtherFeachures(){
        return view('admin-panel.pages.otherFeachures.add');
    }
    public function postOtherFeachures(Request $request){
        foreach($request->all()['name'] as $key=>$data){ 
            // if(OtherFeature::where('name',$data)){
            //     return back()->withErrors([$data.' already exists.']);
            // }
            $feachure = new OtherFeature();
            $feachure->name = $data;
            $feachure->save();
        }
        return redirect()->route('admin.all.otherfeachure');
    }

    // Area Listings Section
    public function allState(){
        $states = Zone::get();
        return view('admin-panel.pages.areaListing.all-zone');
    }

    public function getUser(Request $request){
        $user = Buyer::where('id',$request->id)->first();
        return response()->json($user);
    }

    public function getStates(Request $request){
        $states = Zone::where('zone_country_id', $request->country_id)->get();
        return response()->json($states);
    }

    public function getCities(Request $request){
        $cities = ZoneCity::where('zone_id', $request->state_id)->get();
        return response()->json($cities);
    }

    public function allPostPropertyRequest(){
        // dd(Auth::user());
        $lists = PostPropertyRequest::with('post_property_requests_to_buyers')->where('is_active',0)->get();
        // dd($lists);
        return view('admin-panel.pages.post_property_request.list')->with([
            'lists' => $lists
        ]);
    }
    

}
