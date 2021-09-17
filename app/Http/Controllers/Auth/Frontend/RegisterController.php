<?php

namespace App\Http\Controllers\Auth\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Buyer;
use App\Model\UserPreferenceCity;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'email'         => 'required',
            'password'      => 'required',
            'phone'      => 'required',
            'city_id'   => 'required'
        ]);
        // // store in the database
        $buyers = new Buyer();
        $buyers->name = $request->name;
        $buyers->email = $request->email;
        $buyers->password = bcrypt($request->password);
        $buyers->phone = ($request->phone);
        $buyers->save();

        $city = new UserPreferenceCity();
        $city->user_id = $buyers->id;
        $city->city_id = $request->city_id;
        $city->save();
        return redirect()->route('pages.signup');
    }
    
}
