@extends('layout')

@section('judul', $data->merk_laptop)

@section('konten')
<section class="hero is-success">
    <div class="hero-body">
        <p class="title">{{ $data->merk_laptop }}</p>
        <p class="subtitle">Kategori: {{ $data->kategori ? $data->kategori->nama_kategori : 'Tidak Diketahui' }}</p>
    </div>
</section>

<section class="section has-background-primary-soft has-text-primary-soft-invert">
    <div class="card">
        <div class="card-image">
            <figure class="image is-4by3">
                <img src="{{ asset('storage/' . $data->gambar) }}" alt="{{ $data->merk_laptop }}">
            </figure>
        </div>
        <div class="card-content">
            <div class="content">
                {{ $data->deskripsi }}
            </div>
        </div>
    </div>

    @if ($data->lampiran)
        <div class="card">
            <div class="card-content">
                <div class="content">
                    <h4>Lampiran</h4>
                    @foreach ($data->lampiran as $lampiran)
                        <a href="{{ asset('storage/' . $lampiran) }}" target="_blank">{{ basename($lampiran) }}</a><br>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

</section>
@endsection
