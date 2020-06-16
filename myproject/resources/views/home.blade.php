@extends('layout')
@section('main')

  @foreach ($cagnolini as  $cagnolino)
    <a href="{{route("showcagnolino", $cagnolino["id"])}}">{{$cagnolino["nome"]}}</a><br>
  @endforeach
@endsection
