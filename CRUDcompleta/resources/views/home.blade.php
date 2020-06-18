@extends('mainlayout')
@section('content')

  <h2>Create new omino</h2>

  <ul>

    @foreach ($omini as $omino)
      <li>{{$omino["first_name"]}} {{$omino["last_name"]}}<a href="{{route("show", $omino["id"])}}">Vedi dettagli</a></li><br>
    @endforeach

  </ul>

@endsection
