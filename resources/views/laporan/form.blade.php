@extends('layouts.app')

@section('content')

<div class="card">
    <h2>Form Pelaporan Banjir</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nama Pelapor</label>
            <input type="text" name="nama"
                value="{{ old('nama') }}" required>
        </div>

        <div class="form-group">
            <label>Lokasi Banjir</label>
            <input type="text" name="lokasi"
                value="{{ old('lokasi') }}" required>
        </div>

        <div class="form-group">
            <label>Tinggi Genangan (cm)</label>
            <input type="number" name="tinggi"
                value="{{ old('tinggi') }}" min="0" required>
        </div>

        <div class="form-group">
            <label>Tanggal Kejadian</label>
            <input type="date" name="tanggal_kejadian"
                value="{{ old('tanggal_kejadian') }}" required>
        </div>

        <button type="submit">Kirim Laporan</button>
    </form>
</div>

@endsection