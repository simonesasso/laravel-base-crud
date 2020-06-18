@extends('mainlayout')
@section('content')
  <form class="" action="{{route("store")}}" method="post">
    @csrf
    @method("POST")

    <label for="first_name">FIRST NAME</label>
    <input type="text" name="first_name" value="">

    <br>
    <br>

    <label for="last_name">LAST NAME</label>
    <input type="text" name="last_name" value="">

    <br>
    <br>

    <label for="address">ADDRESS</label>
    <input type="text" name="address" value="">

    <br>
    <br>

    <label for="code">CODE</label>
    <input type="text" name="code" value="">

    <br>
    <br>    

    <label for="state">STATE</label>
    <input type="text" name="state" value="">

    <br>
    <br>

    <label for="phone_number">PHONE NUMBER</label>
    <input type="text" name="phone_number" value="">

    <br>
    <br>

    <label for="role">ROLE</label>
    <input type="text" name="role" value="">

    <br>
    <br>

    <button type="submit" name="button">Create</button>
  </form>
@endsection
