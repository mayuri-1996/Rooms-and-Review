<?php

namespace App\Http\Controllers\Auth\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    public function loginBuyer(Request $request)
    {
        // dd('this');
        // dd(Auth::guard('buyer')->attempt(['email' => $request->email, 'password' => $request->password]));
        // dd('this');
        // Validate the form data
        // $this->validate($request, [
        //     'email'   => 'required|email',
        //     'password' => 'required|min:6'
        // ]);
        // // dd(auth());
        // // Attempt to log the user in
        // if (Auth::guard('buyer')->attempt(['email' => $request->email, 'password' => $request->password])) {
        //     // if successful, then redirect to their intended location
        //     return redirect()->intended(route('pages.index'));
        // }

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('pages.index'))
                        ->withSuccess('You have Successfully loggedin');
        }
  


        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout() {
        Session::flush();
        Auth::logout(); 
        return redirect()->route('pages.signup');
    }
    
}
