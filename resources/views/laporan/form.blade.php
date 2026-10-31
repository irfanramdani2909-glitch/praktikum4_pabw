
@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">Form Laporan Banjir</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('laporan.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Pelapor</label>
                <input type="text" name="nama"
                    class="form-control"
                    value="{{ old('nama') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Lokasi Banjir</label>
                <input type="text" name="lokasi"
                    class="form-control"
                    value="{{ old('lokasi') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tinggi Genangan (cm)</label>
                <input type="number" name="tinggi"
                    class="form-control"
                    value="{{ old('tinggi') }}"
                    min="0" step="any" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Kejadian</label>
                <input type="date" name="tanggal_kejadian"
                    class="form-control"
                    value="{{ old('tanggal_kejadian') }}" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Simpan Laporan
            </button>
        </form>
    </div>
</div>

@endsection
