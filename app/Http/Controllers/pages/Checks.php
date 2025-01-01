<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Checks extends Controller
{
  public function index()
  {
    return view('checks.index');
  }
  public function categories()
  {
    return view('checks.categories');
  }
}
