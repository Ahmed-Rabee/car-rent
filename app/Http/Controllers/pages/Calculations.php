<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Calculations extends Controller
{
  public function calculationsIndex()
  {
    return view('calculations.index');
  }
  public function incomesIndex()
  {
    return view('calculations.incomes.index');
  }
  public function incomesCreate()
  {
    return view('calculations.incomes.create');
  }
  public function incomesEdit()
  {
    return view('calculations.incomes.edit');
  }
  public function incomesCategories()
  {
    return view('calculations.incomes.categories');
  }
  public function incomesView()
  {
    return view('calculations.incomes.view');
  }
}
