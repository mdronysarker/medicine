<?php

namespace App\Http\Controllers;

use App\Models\Req;
use Illuminate\Http\Request;

class MedireqestController extends Controller
{
    public function medireq() {
        $request=Req::all();
      return view('pages.request.list',compact('request'));
    }

    
}
