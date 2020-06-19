@extends('mainlayout')
@section('content')
  <form class="" action="{{route("store")}}" method="post">

    @if ($errors->any())
      <div>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    <br>

    @csrf
    @method("POST")

    <label for="first_name">FIRST NAME</label>
    <input type="text" name="first_name" value="{{ old('first_name') }}">

    <br>
    <br>

    <label for="last_name">LAST NAME</label>
    <input type="text" name="last_name" value="{{ old('last_name') }}">

    <br>
    <br>

    <label for="address">ADDRESS</label>
    <input type="text" name="address" value="{{ old('address') }}">

    <br>
    <br>

    <label for="code">CODE</label>
    <input type="text" name="code" value="{{ old('code') }}">

    <br>
    <br>

    <label for="state">STATE</label>
    <input type="text" name="state" value="{{ old('state') }}">

    <br>
    <br>

    <label for="phone_number">PHONE NUMBER</label>
    <input type="text" name="phone_number" value="{{ old('phone_number') }}">

    <br>
    <br>

    <label for="role">ROLE</label>
    <input type="text" name="role" value="{{ old('role') }}">

    <br>
    <br>

    <button type="submit" name="button">Create</button>
  </form>
@endsection
