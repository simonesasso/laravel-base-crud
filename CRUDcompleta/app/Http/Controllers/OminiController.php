<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Omino;
class OminiController extends Controller
{
  public function index()
  {
    $omini = Omino::all();

    return view("home", compact("omini"));
  }

  public function show($id)
  {
    $omino = Omino::findOrFail($id);
    return view("showlayout", compact("omino"));
  }

  public function delete($id)
  {
    $omino = Omino::findOrFail($id);
    $omino -> delete();
    return  redirect()->route('home');
  }

  public function create()
  {
    return view("createlayout");
  }

  public function store(Request $request)
  {
    $dataOmino = $request->all();
    $omino = new Omino;

    $omino -> first_name = $dataOmino["first_name"];
    $omino -> last_name = $dataOmino["last_name"];
    $omino -> address = $dataOmino["address"];
    $omino -> code = $dataOmino["code"];
    $omino -> state = $dataOmino["state"];
    $omino -> phone_number = $dataOmino["phone_number"];
    $omino -> role = $dataOmino["role"];

    $omino -> save();

    return  redirect()->route('home');
  }

  public function edit($id)
  {
    $omino = Omino::findOrFail($id);

    return view("editlayout", compact("omino"));
  }

  public function update(Request $request, $id)
  {
    $dataOmino = $request->all();
    $omino = Omino::findOrFail($id);

    $omino -> first_name = $dataOmino["first_name"];
    $omino -> last_name = $dataOmino["last_name"];
    $omino -> address = $dataOmino["address"];
    $omino -> code = $dataOmino["code"];
    $omino -> state = $dataOmino["state"];
    $omino -> phone_number = $dataOmino["phone_number"];
    $omino -> role = $dataOmino["role"];

    $omino -> save();

    return redirect() -> route("home");
  }
}
