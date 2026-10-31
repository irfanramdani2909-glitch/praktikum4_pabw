<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    // Menampilkan form laporan
    public function form()
    {
        return view('laporan.form');
    }

    // Menyimpan laporan
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tinggi' => 'required|numeric|min:0',
            'tanggal_kejadian' => 'required|date',
        ]);

        $laporan = Laporan::create([
            'nama_pelapor' => $request->nama,
            'lokasi' => $request->lokasi,
            'tinggi_genangan' => $request->tinggi,
            'tanggal_kejadian' => $request->tanggal_kejadian,
        ]);

        return redirect()->route('laporan.konfirmasi')
            ->with('success', 'Laporan berhasil disimpan!')
            ->with('laporan_id', $laporan->id);
    }

    // Halaman konfirmasi
    public function konfirmasi()
    {
        $laporan = Laporan::findOrFail(
            session('laporan_id')
        );

        return view('laporan.konfirmasi', compact('laporan'));
    }

    // Menampilkan semua laporan
    public function index()
    {
        $laporan = Laporan::latest()->get();

        return view('laporan.index', compact('laporan'));
    }
}
