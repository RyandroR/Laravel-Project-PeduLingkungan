@extends('layouts/main')

@section('container')

<div class="row justify-content-center">
  @if (session()->has('success'))
    {{ session('success') }}
  @endif
  @if (session()->has('loginerror'))
    {{ session('loginerror') }}
  @endif
  <div class="col-md-5">
    <main class="form-signin">
      <form action="/login" method="post">
        @csrf
        <div class="form-floating">
          email
          <input type="email" name="email" 
          class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com"
          value="{{ old('email') }}">
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          Password
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <a href="/register">Sign-up</a>
      </form>
    </main>
  </div>
</div>


@endsection