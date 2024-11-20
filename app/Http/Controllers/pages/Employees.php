<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Employees extends Controller
{
  public function index()
  {
    return view('employees.index');
  }
  public function create()
  {
    return view('employees.create');
  }
  public function edit()
  {
    return view('employees.edit');
  }
  public function view()
  {
    return view('employees.view');
  }
  public function penalties()
  {
    return view('employees.penalties.index');
  }
  public function advances()
  {
    return view('employees.advances.index');
  }
}
