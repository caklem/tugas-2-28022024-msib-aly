<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('siswa.register');
    }

    public function register(Request $request)
    {
        if (!Siswa::where('nama_depan', $request->nama_depan)->exists()) {
        // Validasi input form
        $request->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'agama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        // Simpan data siswa ke dalam tabel siswa
        Siswa::create([
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
        ]);
    }
        // Mengambil data siswa dari database
        $data_siswa = Siswa::all();

        // Mengirimkan data siswa ke view 'siswa.index'
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }
}
