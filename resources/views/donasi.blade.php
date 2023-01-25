@extends('layouts.main')

@section('container')
    Lakukan Donasi
    <form action="/additem" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-floating">
        Image
        <input type="file" name="image" class="form-control @error('image') 
        is-invalid @enderror" id="floatingInput"
        value="{{ old('image') }}">
        @error('image')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        name
        <input type="text" name="name" class="form-control @error('name') 
        is-invalid @enderror" id="floatingInput"
        value="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        Description
        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="floatingPassword" placeholder="Password"
        value="{{ old('description') }}">
        @error('description')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        price
        <input type="text" name="price" class="form-control @error('price') 
        is-invalid @enderror" id="floatingInput" placeholder="name@example.com"
        value="{{ old('price') }}">
        @error('price')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        stock
        <input type="text" name="stock" class="form-control @error('stock') 
        is-invalid @enderror" id="floatingInput" placeholder="name@example.com"
        value="{{ old('stock') }}">
        @error('stock')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Add item</button>
    </form>
@endsection