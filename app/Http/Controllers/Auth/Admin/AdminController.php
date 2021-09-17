<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin',['only' => 'dashBoard','edit']);
    }

    // public function index()
    // {
    //     return view('admin.home');
    // }

    public function dashBoard(){
        return view('admin-panel.pages.dashboard');
    }

    public function create()
    {
        return view('admin-panel.auth.register');
    }

    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, [
            'name'          => 'required',
            'email'         => 'required',
            'password'      => 'required'
        ]);
        // store in the database
        $admins = new Admin();
        $admins->name = $request->name;
        $admins->email = $request->email;
        $admins->password = bcrypt($request->password);
        $admins->save();

       
        return redirect()->route('admin.auth.login');
    }

}
