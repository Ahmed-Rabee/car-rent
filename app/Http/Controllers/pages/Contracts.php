<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Contracts extends Controller
{
  public function index()
  {
    return view('contracts.index');
  }
  public function create()
  {
    return view('contracts.create');
  }
  public function edit()
  {
    return view('contracts.edit');
  }
  public function view()
  {
    return view('contracts.view');
  }
}
