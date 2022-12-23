@extends('template.template')

@section('main')
  <div class="row justify-content-center">
    <h1 class="my-4 text-center">Login</h1>
    
    <div class="col-lg-5">
      @if (session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('status') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('status') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <form action="/login" method="post">
        @csrf
        <section class="form-floating mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
          <label for="email">Email address</label>

          @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </section>

        <section class="form-floating">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
          <label for="password">Password</label>

          @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </section>

        <button type="submit" class="btn btn-primary mt-3">Login</button>
      </form>
      <hr>
      <small>Not Have account? <a href="/register">Register</a></small>
    </div>
  </div>
@endsection