
@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card shadow p-4 text-center">

        <h2 class="text-success">Laporan Berhasil Disimpan!</h2>

        <p class="mt-3">
            Terima kasih telah membantu melaporkan kejadian banjir.
        </p>

        <hr>

        <p><strong>Nama:</strong> {{ $laporan->nama_pelapor }}</p>
        <p><strong>Lokasi:</strong> {{ $laporan->lokasi }}</p>
        <p><strong>Tinggi Genangan:</strong>
            {{ $laporan->tinggi_genangan }} cm
        </p>
        <p><strong>Tanggal:</strong>
            {{ $laporan->tanggal_kejadian }}
        </p>

        <a href="{{ route('laporan.create') }}"
            class="btn btn-primary mt-3">
            Kembali ke Form
        </a>

    </div>
</div>

@endsection
