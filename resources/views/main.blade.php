@extends('layout.place')

@section('content')
  <ul>
    @foreach ($places as $value)
      <li> {{ $value -> name }}</li>
    @endforeach


  </ul>

  <a href="{{ route('plc.create') }}">Aggiungi</a>

@endsection
