@extends('layout')

@section('judul', 'Merk Laptop ' . $kategori->nama_kategori)

@section('konten')
<section class="hero is-success">
    <div class="hero-body">
        <p class="title">Merk Laptop</p>
        <p class="subtitle"> Kategori: {{ $kategori->nama_kategori }}</p>
    </div>
</section>

<section class="section has-background-primary-soft has-text-primary-soft-invert">
    @foreach ($data as $item)
    <div class="card">
        <div class="card-image">
            <figure class="image is-4by3">
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->merk_laptop }}">
            </figure>
        </div>
        <div class="card-content">
            <div class="content">
                <h2>{{ $item->merk_laptop }}</h2>
            </div>
        </div>
        <footer class="card-footer">
            <a href="/laptop/{{ $item->id }}" class="card-footer-item">
                Selengkapnya
            </a>
        </footer>
    </div>
    @endforeach
</section>
@endsection
