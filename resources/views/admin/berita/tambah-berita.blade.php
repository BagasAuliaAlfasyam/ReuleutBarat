@extends('template.dashboard')

@section('main')
    <h1>test</h1>

    <form action="/admin/dashboard/berita" method="POST" class="col-lg-8 mx-auto mb-5">
      @csrf

      <section class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" required>
        @error('judul')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </section>

      <section class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" name="slug" class="form-control" id="slug" readonly>
      </section>

      <section class="mb-3">
        <label for="body" class="form-label">Isi Berita</label>
        <input type="hidden" name="isi_berita" id="body">
        <trix-editor input='body' class="trix-content"></trix-editor>
        @error('isi_berita')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </section>

      <button type="submit" class="btn btn-primary">Tambah Berita</button>
    </form>
@endsection
