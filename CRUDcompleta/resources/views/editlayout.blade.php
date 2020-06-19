@extends('mainlayout')
@section('content')



  <form class="" action="{{route("update", $omino["id"])}}" method="post">

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
    <input type="text" name="first_name" value="{{$omino['first_name']}}">

    <br>
    <br>

    <label for="last_name">LAST NAME</label>
    <input type="text" name="last_name" value="{{$omino['last_name']}}">

    <br>
    <br>

    <label for="address">ADDRESS</label>
    <input type="text" name="address" value="{{$omino['address']}}">

    <br>
    <br>

    <label for="code">CODE</label>
    <input type="text" name="code" value="{{$omino['code']}}">

    <br>
    <br>

    <label for="state">STATE</label>
    <input type="text" name="state" value="{{$omino['state']}}">

    <br>
    <br>

    <label for="phone_number">PHONE NUMBER</label>
    <input type="text" name="phone_number" value="{{$omino['phone_number']}}">

    <br>
    <br>

    <label for="role">ROLE</label>
    <input type="text" name="role" value="{{$omino["role"]}}">

    <br>
    <br>

    <button type="submit" name="button">Update</button>
  </form>
@endsection
