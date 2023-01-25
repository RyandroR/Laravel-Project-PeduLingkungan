@extends('layouts.main')
{{--pake {!! var !!} kalo mau jalanin html dalem text--}} 
@section('container')
      <div class="card justify-content-center" style="width: 640px;">
        <div class="card-header">
            Hello, {{ auth()->user()->name }}       User ID: {{ auth()->user()->id }}
        </div>
        <div class="card-body">
          <h3 class="card-title">Points: {{ auth()->user()->points }}</h3>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

@endsection