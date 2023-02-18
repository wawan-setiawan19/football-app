@extends('landing_page')
@section('content')
   <div class="container py-4 mt-5">
      <h1>Input Data Klub</h1>
      <div class="table-responsive pt-2 pb-2">
         <button type="button" class="btn btn-dark mb-3 dark-color-special" data-bs-toggle="modal" data-bs-target="#addModal">+ Tambah Klub</button>
         @include('pages.klub.add')
         @include('pages.klub.table')
      </div>
   </div>
@endsection()