<?php

namespace App\Http\Controllers;
use App\Models\Volunteer;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
  public function list () {
    $volunteers = Volunteer::paginate(4);
    return view('pages.volunteer.list',compact('volunteers'));
  }

  public function create () {
    return view('pages.volunteer.create');
  }

  public function store (Request $request) {
    Volunteer::create([
      'name'=>$request->name,
       'user_email'=>$request->email,
       'mobile_no'=>$request->phone,
    ]);
    return redirect()->route('volunteer.list');
  }

  public function view ($id) {
    $volunteer = Volunteer::find($id);
    return view('pages.volunteer.view',compact('volunteer'));
  }

  public function delete($id) {
    Volunteer::find($id)->delete();
    notify()->success('Delete sucessfull!');
    return redirect()->back();

  }  

  public function voulunteerSearch (Request $request) {
  
    $volunteers = Volunteer::where('name','Like','%'.$request->search_key.'%')->get();
   
    return view('pages.volunteer.search-list',compact('volunteers'));
  }
}
