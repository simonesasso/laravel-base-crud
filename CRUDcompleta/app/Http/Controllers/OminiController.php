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
    $validatedData = $request->validate([
      "first_name" => 'required',
      "last_name" => 'required',
      "address" => 'required',
      "code" => 'required',
      "state" => 'required',
      "phone_number" => 'required',
      "role" => 'required',
    ]);

    $omino = new Omino;

    $omino -> first_name = $validatedData["first_name"];
    $omino -> last_name = $validatedData["last_name"];
    $omino -> address = $validatedData["address"];
    $omino -> code = $validatedData["code"];
    $omino -> state = $validatedData["state"];
    $omino -> phone_number = $validatedData["phone_number"];
    $omino -> role = $validatedData["role"];

    $omino -> save();

    return  redirect()->route('home')->withSuccess("Created " . $validatedData["first_name"] . " successfully!!");
  }

  public function edit($id)
  {
    $omino = Omino::findOrFail($id);

    return view("editlayout", compact("omino"));
  }

  public function update(Request $request, $id)
  {



    $validatedData = $request->validate([
      "first_name" => 'required',
      "last_name" => 'required',
      "address" => 'required',
      "code" => 'required',
      "state" => 'required',
      "phone_number" => 'required',
      "role" => 'required',
    ]);

    $omino = Omino::findOrFail($id);

    $omino -> first_name = $validatedData["first_name"];
    $omino -> last_name = $validatedData["last_name"];
    $omino -> address = $validatedData["address"];
    $omino -> code = $validatedData["code"];
    $omino -> state = $validatedData["state"];
    $omino -> phone_number = $validatedData["phone_number"];
    $omino -> role = $validatedData["role"];

    $omino -> save();

    return redirect() -> route("show", $omino["id"])->withSuccess("Updated successfully!!");
  }
}
