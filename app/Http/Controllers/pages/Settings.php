<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Settings extends Controller
{
  public function index()
  {
    return view('settings.index');
  }
  public function GeneralSettings()
  {
    return view('settings.general-settings');
  }
  public function PrintSettings()
  {
    return view('settings.print-settings.index');
  }
  public function trafficViolationsPrint()
  {
    return view('settings.print-settings.traffic-violations-print');
  }
}
