<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MydonationController extends Controller
{
    public function dashbroad () {
        return view('pages.mydonation.dashbroad');
    }

    public function medicine () {
        $medicines=Medicine::all();
        return view('pages.mydonation.medicine',compact('medicines'));
    }

    public function mydonationList () {
        $mydonations = Donation::with('medicine')->paginate(4);
        return view('pages.mydonation.mydonationlist',compact('mydonations'));
    }

    public function medicineStore(Request $request) {
        $validate = Validator::make($request->all(),[
            'name'=>'required',
            'address'=>'required',
            'quantity'=>'required',
            'expiry'=>'required',
            'medicinetype'=>'required',
            'number'=>'required',
            
        
        ]);

        if($validate->fails()) {
            notify()->error($validate->getMessageBag());
            return redirect()->back();
        }

        Donation::create([
            'donor_name'=>$request->name,
             'address'=>$request->address,
             'medicine_id'=>$request->medicine_id,
             'quantity'=>$request->quantity,
             'e_date'=>$request->expiry,
             'medicine_type'=>$request->medicinetype,
             'mobile_no'=>$request->number,
          ]);

          return redirect()->back();

         
    }
}
