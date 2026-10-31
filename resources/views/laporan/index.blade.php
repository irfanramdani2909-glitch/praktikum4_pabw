@extends('layouts.app')

@section('content')

<div class="card">
    <h2>Daftar Laporan Banjir</h2>

    <a href="{{ route('laporan.form') }}">
        Tambah Laporan
    </a>
</div>

@forelse ($laporan as $item)

    @include('partials.laporan-card', [
        'laporan' => $item
    ])

@empty

    <div class="card">
        <p>Belum ada laporan banjir.</p>
    </div>

@endforelse

@endsection