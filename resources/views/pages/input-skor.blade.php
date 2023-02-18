@extends('landing_page')
@section('content')
    <div class="container py-4 mt-5">
      <h1>Input Skor</h1>
      <button class="btn btn-dark" onclick="addMatch()">Add Match</button>
      @include('pages.skor.add')
    </div>
@endsection()