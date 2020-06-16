@extends('layout')
@section('main')
  <h3>Razza: {{$cagnolino["tipo"]}}</h3>
  <h3>Peso: {{$cagnolino["peso"]}} kg</h3>
  <h3>Altezza: {{$cagnolino["altezza"]}} cm</h3>
@endsection
