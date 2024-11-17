<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Branches extends Controller
{
  public function index()
  {
    return view('branches.index');
  }
  public function create()
  {
    return view('branches.create');
  }
  public function edit()
  {
    return view('branches.edit');
  }
  public function view()
  {
    return view('branches.view');
  }
  public function statistics()
  {
    return view('branches.statistics');
  }
}
