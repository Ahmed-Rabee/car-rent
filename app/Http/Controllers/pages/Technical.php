<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Technical extends Controller
{
  public function index()
  {
    return view('technical.index');
  }
  public function create()
  {
    return view('technical.create');
  }
  public function edit()
  {
    return view('technical.edit');
  }
  public function view()
  {
    return view('technical.view');
  }
  public function periodicMaintenanceIndex()
  {
    return view('technical.periodic-maintenance.index');
  }
}
