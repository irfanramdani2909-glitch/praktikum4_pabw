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

    // Menyimpan laporan ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'tinggi' => 'required|numeric|min:0',
            'tanggal_kejadian' => 'required|date'
        ]);

        $laporan = Laporan::create([
            'nama_pelapor' => $request->nama,
            'lokasi' => $request->lokasi,
            'tinggi_genangan' => $request->tinggi,
            'tanggal_kejadian' => $request->tanggal_kejadian
        ]);

        return view('laporan.konfirmasi', compact('laporan'));
    }

    // Menampilkan semua laporan
    public function index()
    {
        $laporan = Laporan::all();

        return view('laporan.index', compact('laporan'));
    }
}