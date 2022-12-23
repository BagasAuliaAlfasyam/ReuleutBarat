@extends('template.dashboard')

@section('main')
    <h1>{{ $berita->judul }}</h1>

    <img src="https://source.unsplash.com/1200x400/?personal" alt="" class="img-fluid">

    <article>
        {!! $berita->isi_berita !!}    
    </article>
@endsection