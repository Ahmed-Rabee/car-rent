<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Clients extends Controller
{
  public function index()
  {
    return view('clients.index');
  }
  public function create()
  {
    return view('clients.create');
  }
  public function edit()
  {
    return view('clients.edit');
  }
  public function view()
  {
    return view('clients.view');
  }
}
