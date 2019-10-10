@extends('layout.place')

@section('content')
  <form class="" action="{{ route('plc.store') }}" method="post">
    @csrf
      @method('POST')
      <div class="form-group">
        <label for="name">First name</label>
        <input type="text" name="name" value="">
      </div>
      <div class="form-group">
        <label for="lastName">Cognome</label>
        <input type="text" name="lastName" value="">
      </div>
      <div class="form-group">
        <label for="address">indirizzo</label>
        <input type="text" name="address" value="">
      </div>
      <div class="form-group">
        <label for="city">città</label>
        <input type="text" name="city" value="">
      </div>
      <div class="form-group">
        <label for="nation">nazione</label>
        <input type="text" name="nation" value="">
      </div>
      <button type="submit" name="button">Aggiungi</button>
  </form>

@endsection
