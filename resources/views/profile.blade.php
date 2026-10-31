
@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card shadow">

        <div class="card-header bg-success text-white">
            <h4>Profil Petugas</h4>
        </div>

        <div class="card-body">

            <p>
                <strong>Nama:</strong>
                {{ Auth::user()->name }}
            </p>

            <p>
                <strong>Email:</strong>
                {{ Auth::user()->email }}
            </p>

            <p>
                <strong>Waktu Pembuatan Akun:</strong>
                {{ Auth::user()->created_at->format('d-m-Y H:i') }}
            </p>

        </div>
    </div>
</div>

@endsection
