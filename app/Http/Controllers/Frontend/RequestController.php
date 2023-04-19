<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\Req;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function requestlist () {
        $donations  = Donation::paginate(4);
        return view('website.pages.request.list',compact('donations'));
    }

    public function userReq($id) {
        $data=Donation::find($id);
        return view('website.pages.request.user',compact('data'));
    }

    public function userSotre(Request $request) {
     
       Req::create([

        'name'=>$request->name,
        'address'=>$request->address,
        'email'=>$request->email,
        'nid'=>$request->nid,
        'mobile_no'=>$request->mobile_no,
        'details'=>$request->details,


       ]);

       return redirect()->back();
    }
}
