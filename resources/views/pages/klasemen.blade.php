@extends('landing_page')
@section('content')
    <div class="container py-4 mt-5">
      <h1>Klasemen</h1>
      @include('pages.klasemen.table')
    </div>
@endsection()