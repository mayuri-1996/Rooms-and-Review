<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Admin;

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


}
