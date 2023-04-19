<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function donor() {
        $donors= User::where('type','donor')->get();
        return view('pages.donor.list',compact('donors'));
    }
}
