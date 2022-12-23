@extends('template.dashboard')

@section('main')
  <section>
    <h1 class="fs-4">Santri | Latest</h1>
    
    <div class="table-responsive">
      <table class="table table-hover text-center" style="table-layout: fixed">
        <thead class="table-success">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Santri</th>
            <th scope="col">No. Induk</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($santri as $s)
            <tr>
              <th scope="row">{{  $loop->iteration }}</th>
              <td>{{ $s->nama_santri }}</td>
              <td>{{ $s->no_induk }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>

  <section>
    <h1 class="fs-4 text-decoration-underline">Berita | Latest</h1>

    <div class="row gap-1 mx-0">
      @foreach ($berita as $b)
        <article class="card" style="width: 33%">
          <div class="card-body px-2">
            <h5 class="card-title">{{ $b->judul }}</h5>
            <p class="card-text">{{ $b->isi_berita }}</p>
          </div>
        </article>
      @endforeach
    </div>
  </section>
@endsection