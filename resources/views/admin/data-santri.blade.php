@extends('template.dashboard')

@section('main')
    <h1 class="mb-4">Data Santri</h1>

    <div class="input-group w-25 mb-3">
      <label for="inputSantri" class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></label>
      <input type="search" id="inputSantri" onkeyup="searchSantri()" placeholder="Cari nama santri" class="form-control">
    </div>
    
    <a href="/admin/penambahan-data-santri" role="button" class="btn btn-primary mb-2">Tambah Santri</a>

    <div class="table-responsive">
      <table class="table table-hover text-center" id="tableSantri" style="table-layout: fixed">
        <thead class="table-success">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Santri</th>
            <th scope="col">No. Induk</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Nama Orang Tua</th>
            <th scope="col" class="text-center">Alamat</th>
          </tr>
        </thead>

        <tbody>
          <?php $i = 1 ?>
          @foreach ($santri as $s)
            <tr>
              <th scope="row">{{  $i++; }}</th>
              <td>{{ $s->nama_santri }}</td>
              <td>{{ $s->no_induk }}</td>
              <td>{{ $s->tempat_lahir }}</td>
              <td>{{ $s->tanggal_lahir }}</td>
              <td>{{ $s->nama_ortu }}</td>
              <td>{{ $s->alamat }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection

@section('javascript')
    <script src="../scripts/table.js"></script>
@endsection
