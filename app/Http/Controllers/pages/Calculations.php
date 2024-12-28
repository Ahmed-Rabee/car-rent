<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Calculations extends Controller {
  public function calculationsIndex() {
    return view('calculations.index');
  }

  /** Incomes **/
  public function incomesIndex() {
    return view('calculations.incomes.index');
  }
  public function incomesCreate() {
    return view('calculations.incomes.create');
  }
  public function incomesEdit() {
    return view('calculations.incomes.edit');
  }
  public function incomesView() {
    return view('calculations.incomes.view');
  }
  public function incomesCategories() {
    return view('calculations.incomes.categories');
  }

  /** General Expenses **/
  public function generalExpensesIndex() {
    return view('calculations.general-expenses.index');
  }
  public function generalExpensesCreate() {
    return view('calculations.general-expenses.create');
  }
  public function generalExpensesEdit() {
    return view('calculations.general-expenses.edit');
  }
  public function generalExpensesView() {
    return view('calculations.general-expenses.view');
  }
  public function generalExpensesCategories() {
    return view('calculations.general-expenses.categories');
  }

  /** Vehicle Expenses **/
  public function vehicleExpensesIndex() {
    return view('calculations.vehicle-expenses.index');
  }
  public function vehicleExpensesCreate() {
    return view('calculations.vehicle-expenses.create');
  }
  public function vehicleExpensesEdit() {
    return view('calculations.vehicle-expenses.edit');
  }
  public function vehicleExpensesView() {
    return view('calculations.vehicle-expenses.view');
  }
  public function vehicleExpensesCategories() {
    return view('calculations.vehicle-expenses.categories');
  }

  /** Origins Expenses **/
  public function originsIndex() {
    return view('calculations.origins.index');
  }
  public function originsCreate() {
    return view('calculations.origins.create');
  }
  public function originsEdit() {
    return view('calculations.origins.edit');
  }
  public function originsView() {
    return view('calculations.origins.view');
  }
  public function originsCategories() {
    return view('calculations.origins.categories');
  }
}
