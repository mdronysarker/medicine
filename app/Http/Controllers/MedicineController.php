<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class MedicineController extends Controller
{
    public function medicinelist(){
   $medicines=Medicine::with("category","brand")->paginate(5);
        return view('pages.medicine.medicinelist',compact('medicines'));
       }
       public function create(){
        $categories=Category::all();
        $brands=Brand::all();
 
        return view('pages.medicine.create',compact('categories', 'brands'));
       }

       public function medicinestore(Request $request) {
        Medicine::create([

            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id,
            'status'=>$request->status,
            'group_name'=>$request->group_name,
            'image'=>$request->image,

        ]);
          return redirect()->route('medicine.list');
       }
       
}
