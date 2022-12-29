@extends('layouts/main')

@section('container')

<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-signin">
      <form action="/register" method="post">
        @csrf
        <small>GRAPHIC</small> dsign is my <small>passion</small>
        <div class="form-floating">
          Name
          <input type="name" name="name" class="form-control @error('name') 
          is-invalid @enderror" id="floatingInput" placeholder="name@example.com"
          value="{{ old('name') }}">
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          email
          <input type="email" name="email" class="form-control @error('email') 
          is-invalid @enderror" id="floatingInput" placeholder="name@example.com"
          value="{{ old('email') }}">
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          Password
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <a href="/register">Sign-up</a>
      </form>
    </main>
  </div>
</div>


@endsection