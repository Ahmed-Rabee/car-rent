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
  public function view()
  {
    return view('traffic-violations.view');
  }
  public function print()
  {
    return view('traffic-violations.print');
  }
}
