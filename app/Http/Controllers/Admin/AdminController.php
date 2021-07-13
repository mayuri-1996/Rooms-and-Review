<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashBoard(){
        return view('admin-panel.pages.dashboard');
    }

    public function allBuyerOrOwner(){
        return view('admin-panel.pages.buyerOwner.all-buyer-owner');
    }
}
