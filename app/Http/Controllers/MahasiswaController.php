<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
class MahasiswaController extends Controller
{
    // Tampilkan form input
    public function form()
    {
        return view('form');
    }

    // Simpan data dari form
    public function simpan(Request $request)
    {
        Mahasiswa::create([
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'umur' => $request->umur,


        ]);

        return "Data mahasiswa berhasil disimpan!";
    }

    // Tampilkan daftar mahasiswa
    public function daftar()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa', ['mahasiswa' => $data]);
    }
}