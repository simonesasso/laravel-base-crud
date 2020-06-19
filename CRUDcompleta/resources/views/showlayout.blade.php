@extends('mainlayout')
@section('content')



  <ul>
    @if(session('success'))
      <li><b>{{session('success')}}</b></li>
    @endif
    <li>FIRST NAME: {{$omino["first_name"]}}</li>
    <li>LAST NAME: {{$omino["last_name"]}}</li>
    <li>ADDRESS: {{$omino["address"]}}</li>
    <li>CODE: {{$omino["code"]}}</li>
    <li>STATE: {{$omino["state"]}}</li>
    <li>PHONE NUMBER: {{$omino["phone_number"]}}</li>
    <li>ROLE: {{$omino["role"]}}</li>
    <a href="{{route("delete", $omino["id"])}}">Delete</a>
    <a href="{{route("edit", $omino["id"])}}">Edit</a>
    <a href="{{route("home")}}">Home</a>
  </ul>
@endsection
