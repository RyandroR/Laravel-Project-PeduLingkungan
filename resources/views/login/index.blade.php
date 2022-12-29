@extends('layouts/main')

@section('container')

<div class="row justify-content-center">
  @if (session()->has('success'))
    {{ session('success') }}
  @endif
  <div class="col-md-5">
    <main class="form-signin">
      <form>
        <small>GRAPHIC</small> dsign is my <small>passion</small>
        <div class="form-floating">
          email
          <input type="email" name="E-mail" class="form-control" id="floatingInput" placeholder="name@example.com">
        </div>
        <div class="form-floating">
          Password
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <a href="/register">Sign-up</a>
      </form>
    </main>
  </div>
</div>


@endsection