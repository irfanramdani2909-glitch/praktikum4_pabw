
@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body text-center">

            <h2>Dashboard Petugas BPBD</h2>

            <p>
                Selamat datang,
                <strong>{{ Auth::user()->name }}</strong>
            </p>

            <p>
                Anda berhasil login ke sistem LaporBanjir.
            </p>

            <a href="{{ route('daftar-laporan') }}"
                class="btn btn-success">
                Lihat Daftar Laporan
            </a>

        </div>
    </div>
</div>

@endsection
