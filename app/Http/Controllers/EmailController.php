<?php

namespace App\Http\Controllers;
use App\Jobs\SendNameJob;

use Illuminate\Http\Request;

class EmailController extends Controller
{

  public function sendEmail(){
    $deck = new SendNameJob();
    $okay = dispatch(new SendNameJob($deck));
  dd($okay);
  }
}
