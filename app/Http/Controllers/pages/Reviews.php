<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Reviews extends Controller
{
  public function index()
  {
    return view('clients.reviews.index');
  }
  public function view()
  {
    return view('clients.reviews.view');
  }
}
