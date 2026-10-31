<div class="card">
    <h3>{{ $laporan->nama_pelapor }}</h3>

    <p>
        <strong>Lokasi:</strong>
        {{ $laporan->lokasi }}
    </p>

    <p>
        <strong>Tinggi Genangan:</strong>
        {{ $laporan->tinggi_genangan }} cm
    </p>

    <p>
        <strong>Tanggal:</strong>
        {{ $laporan->tanggal_kejadian }}
    </p>

    <p>
        <strong>Status:</strong>

        @if ($laporan->tinggi_genangan < 30)
            Waspada
        @elseif ($laporan->tinggi_genangan <= 70)
            Siaga
        @else
            Awas
        @endif
    </p>
</div>