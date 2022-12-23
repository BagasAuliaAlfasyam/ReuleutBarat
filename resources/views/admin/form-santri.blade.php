@extends('template.dashboard')

@section('main')
  <h1 class="my-5 text-center">Penambahan Data Santri</h1>

  <div class="row">
    <form action="/admin/penambahan-data-santri" method="POST" class="col-md-7 mx-auto mb-5">
      @csrf

      <section class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama_santri" class="form-control" id="nama">
      </section>

      <section class="mb-3">
        <label for="no_induk" class="form-label">No. Induk</label>
        <input type="number" name="no_induk" class="form-control" id="no_induk">
      </section>

      <section class="mb-3">
        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir">
      </section>

      <section class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
      </section>

      <section class="mb-3">
        <label for="nama_ortu" class="form-label">Nama Orang tua</label>
        <input type="text" name="nama_ortu" class="form-control" id="nama_ortu">
      </section>

      <section class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea name="alamat" name="alamat" id="alamat" cols="3" class="form-control"></textarea>
      </section>

      <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
  </div>
@endsection