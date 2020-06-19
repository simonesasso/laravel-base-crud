@extends('mainlayout')
@section('content')

  <h1>Omini</h1><br>
  <h2><a href="{{route("create")}}">Create new omino</a></h2><br>

  @if(session('success'))
    <h1>{{session('success')}}</h1>
  @endif

  <br>

  <ul>

    @foreach ($omini as $omino)
      <li>{{$omino["first_name"]}} {{$omino["last_name"]}}<a href="{{route("show", $omino["id"])}}" > Vedi dettagli</a></li><br>
    @endforeach

  </ul>

@endsection
