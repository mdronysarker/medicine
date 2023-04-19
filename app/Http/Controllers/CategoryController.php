<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MedicineCategory;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function categorylist() {
        $categoryies = Category::paginate(4);
        return view('pages.category.list',compact('categoryies'));
    }

    public function categorycreate() {
        return view('pages.category.create');
    }

    public function categorystore(Request $request) {
        Category::create([
            'name'=>$request->name,
             'status'=>$request->status,
          ]);
          return redirect()->route('category.list');
        
    }
}