@extends('layout')
@section('main')
  <h3>RAZZA: {{$cagnolino["tipo"]}}</h3>
  <h3>PESO: {{$cagnolino["peso"]}} kg</h3>
  <h3>ALTEZZA: {{$cagnolino["altezza"]}} cm</h3>
@endsection
