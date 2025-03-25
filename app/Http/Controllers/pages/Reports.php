<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Reports extends Controller
{
  public function index()
  {
    return view('reports.index');
  }
  public function trafficViolations()
  {
    return view('reports.traffic-violations');
  }
}
