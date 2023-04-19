<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brandlist() {
        $brands= Brand::paginate(4);
        return view('pages.brand.list',compact('brands'));
    }

    public function brandcreate() {
        return view('pages.brand.create');
    }

    public function brandstore(Request $request) {
        Brand::create([
            'name'=>$request->name,
             'status'=>$request->status,
          ]);
          return redirect()->route('brand.list');
        
    }
}
