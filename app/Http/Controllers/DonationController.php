<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
  public function donation() {
    $donations  = Donation::paginate(4);
    return view('pages.donation.list',compact('donations'));
  }
  
}
