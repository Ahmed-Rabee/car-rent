<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Reservations extends Controller
{
  public function index()
  {
    return view('reservations.index');
  }
  public function create()
  {
    return view('reservations.create');
  }
  public function edit()
  {
    return view('reservations.edit');
  }
  public function view()
  {
    return view('reservations.view');
  }
}
