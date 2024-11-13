<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Permissions extends Controller
{
  public function index()
  {
    return view('permissions.index');
  }
  public function create()
  {
    return view('permissions.create');
  }
  public function edit()
  {
    return view('permissions.edit');
  }
  public function view()
  {
    return view('permissions.view');
  }
}
