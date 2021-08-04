<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Admin;
use App\Model\OtherFeature;
use App\Model\PropertyType;
use App\Model\Country;
use App\Model\Zone;

class AdminController extends Controller
{
    // public function dashBoard(){
    //     return view('admin-panel.pages.dashboard');
    // }

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
        return view('admin-panel.pages.properties.all');
    }

    public function addProperty(){
        $others_feachures = OtherFeature::get();
        $types = PropertyType::get();
        $countries = Country::get();
        return view('admin-panel.pages.properties.add')->with([
            'others_feachures' => $others_feachures,
            'types' => $types,
            'countries' => $countries
        ]);
    }
    public function postProperty(Request $request){
        dd($request->all());
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

}
