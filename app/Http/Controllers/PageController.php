<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function about(){
        return view('pages.about');
    }
    public function addproperty(){
        return view('pages.addproperty');
    }
    public function myproperty(){
        return view('pages.myproperty');
    }
    public function dashboard(){
        return view('pages.dashboard');
    }
    public function propertydetails(){
        return view('pages.propertydetails');
    }
    public function propertylisting(){
        return view('pages.propertylisting');
    }
    public function myprofile(){
        return view('pages.myprofile');
    }
    public function changepassword(){
        return view('pages.changepassword');
    }
    public function bookmarklisting(){
        return view('pages.bookmarklisting');
    }
    
}
