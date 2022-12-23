@extends('template.template')

@section('main')
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <h1 class="my-4 text-center">Register</h1>

      <form action="/register" method="post">
        @csrf
        <section class="form-floating mb-3">
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name Example">
          <label for="name">Name</label>

          @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </section>

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

        <button type="submit" class="btn btn-primary mt-3">Register</button>
      </form>
      <hr>

      <small>Already have account? <a href="/login">Login</a></small>
    </div>
  </div>
@endsection