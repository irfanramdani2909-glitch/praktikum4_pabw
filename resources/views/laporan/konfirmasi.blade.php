@extends('layouts.app')

@section('content')

<div class="card">
    <x-alert
        type="success"
        message="Laporan banjir berhasil disimpan ke database!"
    />

    <h2>Konfirmasi Laporan Banjir</h2>

    <p><strong>Nama Pelapor:</strong>
        {{ $laporan->nama_pelapor }}</p>

    <p><strong>Lokasi:</strong>
        {{ $laporan->lokasi }}</p>

    <p><strong>Tinggi Genangan:</strong>
        {{ $laporan->tinggi_genangan }} cm</p>

    <p><strong>Tanggal Kejadian:</strong>
        {{ $laporan->tanggal_kejadian }}</p>

    <h3>Status Genangan:</h3>

    @if ($laporan->tinggi_genangan < 30)
        <p>Waspada</p>
    @elseif ($laporan->tinggi_genangan <= 70)
        <p>Siaga</p>
    @else
        <p>Awas</p>
    @endif

    <a href="{{ route('laporan.form') }}">Kembali ke Form</a>
    <br>
    <a href="{{ route('laporan.index') }}">Lihat Daftar Laporan</a>
</div>

@endsection