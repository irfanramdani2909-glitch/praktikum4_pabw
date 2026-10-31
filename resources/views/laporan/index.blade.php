
@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="mb-4">Daftar Laporan Banjir</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Pelapor</th>
                        <th>Lokasi</th>
                        <th>Tinggi Genangan</th>
                        <th>Tanggal Kejadian</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($laporan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_pelapor }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td>{{ $item->tinggi_genangan }} cm</td>
                            <td>{{ $item->tanggal_kejadian }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                Belum ada laporan banjir.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <a href="{{ route('laporan.create') }}"
            class="btn btn-success">
            Buat Laporan Baru
        </a>
    </div>
</div>

@endsection
