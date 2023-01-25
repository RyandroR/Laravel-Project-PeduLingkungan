$table->float('weight');
$table->string('image');
$table->string('location');

@extends('layouts.main')

@section('container')
    Lakukan Donasi
    <form action="/donasi" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-floating">
        Donator Id<small>(Auto Filled) Check your profile to confirm</small>
        <input type="text" name="user_id" class="form-control @error('user_id') 
        is-invalid @enderror" id="floatingInput"
        value="{{ auth()->user()->id }}">
        @error('user_id')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        Weight of trash donated
        <input type="text" name="weight" class="form-control @error('weight') 
        is-invalid @enderror" id="floatingInput"
        value="{{ old('weight') }}">
        @error('weight')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        Location
        <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" id="floatingPassword" placeholder="Password"
        value="{{ old('location') }}">
        @error('location')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        Proof image
        <input type="file" name="image" class="form-control @error('image') 
        is-invalid @enderror" id="floatingInput"
        value="{{ old('image') }}">
        @error('image')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
    </form>
@endsection