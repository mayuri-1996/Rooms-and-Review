<?php

namespace App\Http\Controllers\Auth\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Buyer;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'email'         => 'required',
            'password'      => 'required',
            'phone'      => 'required'
        ]);
        // // store in the database
        $admins = new Buyer();
        $admins->name = $request->name;
        $admins->email = $request->email;
        $admins->password = bcrypt($request->password);
        $admins->phone = ($request->phone);
        $admins->save();
        return redirect()->route('pages.signup');
    }
    
}
