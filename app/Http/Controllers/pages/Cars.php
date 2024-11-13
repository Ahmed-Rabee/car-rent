<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Cars extends Controller
{
  public function index()
  {
    return view('cars.index');
  }
  public function create()
  {
    return view('cars.create');
  }
  public function edit()
  {
    return view('cars.edit');
  }
  public function view()
  {
    return view('cars.view');
  }

  public function brandsIndex()
  {
    return view('cars.brands.index');
  }

  public function modelsIndex()
  {
    return view('cars.models.index');
  }

  public function categoriesIndex()
  {
    return view('cars.categories.index');
  }

}
