<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrafficViolations extends Controller
{
  public function index()
  {
    return view('traffic-violations.index');
  }
}
