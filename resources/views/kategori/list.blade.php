@extends('layout')

@section('judul', 'Kategori')

@section('konten')
<section class="hero is-success">
    <div class="hero-body">
        <p class="title">Kategori</p>
        <p class="subtitle">Informasi Konser Laptop</p>
    </div>
</section>

<section class="section has-background-primary-soft has-text-primary-soft-invert">
    @foreach ($data as $item)
    <div class="card">
        <div class="card-content">
            <div class="content">
                {{ $item->nama_kategori }}
            </div>
        </div>
        <footer class="card-footer">
            <a href="/kategori/{{ $item->id }}" class="card-footer-item">
                Selengkapnya
            </a>
        </footer>
    </div>
    @endforeach
</section>
@endsection
