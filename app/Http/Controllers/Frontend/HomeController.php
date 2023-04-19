<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class HomeController extends Controller
{
    public function home() {
       return view('website.pages.home');
    }

    public function userStore(Request $request) {
        $validate=Validator::make($request->all(),[
       
            'donor_name'=> 'required',
            'donor_email'=>'required',
             'password'=>'required|confirmed',
             'password_confirmation'=>'required'

        ]);

        if($validate->fails())
        {
            notify()->error($validate->getMessageBag());
            return redirect()->back();

        }

        User::create([

         'name'=>$request->donor_name,
         'email'=>$request->donor_email,
         'password'=>bcrypt($request->password),
         'type'=>'donor'
        ]);

        notify()->success('Registration successful');
        return redirect()->back();
        
             
    }

    public function userLogin(Request $request) {
     
        $validate = Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->getMessageBag());
            return redirect()->back();
        }

        $credentials= $request ->only(['email', 'password']);

        if (auth()->attempt($credentials)) {
            notify()->success('Login success');
            return redirect()->route('home');
        }

        notify()->success('Login Failed');
        return redirect()->back();

    }


}
