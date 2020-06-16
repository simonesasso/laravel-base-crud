<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cagnolini;
class CagnoliniController extends Controller
{
  public function index()
  {
    $cagnolini = Cagnolini::all();

    return view("home", compact("cagnolini"));
  }
  public function show($id)
  {
    $cagnolino = Cagnolini::findOrFail($id);

    return view("viewcagnolino", compact("cagnolino"));
  }
}
