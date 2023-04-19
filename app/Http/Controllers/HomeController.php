<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function home()
    {

        return view ('pages.home');
    }

    public function login() {
        return view ('pages.login');
    }

    public function doLogin(Request $request ) {
        $validate = Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required|min:5',
        ]);

        if($validate->fails()) {
            notify()->error($validate->getMessageBag());
            return redirect()->back();
        }

        $credentials = $request->only(['email', 'password']);
        if(auth()->attempt($credentials)) {
            notify()->success('Login successfull');
            return redirect()->route('home');
        }

        notify()->error('Login Fail');
        return redirect()->back();
    } 

    public function logout() {
        auth()->logout();
        notify()->success('Logout successfull');
        return redirect()->route('login');
    }
}