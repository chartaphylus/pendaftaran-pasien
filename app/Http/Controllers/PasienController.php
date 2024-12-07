<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\pasien;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PasienController extends Controller
{
    // Menampilkan daftar pasien
    public function pasiens()
    {
        $pasiens = Pasien::with('dokter')->get();
        return view('Dashboard.admin-role.data-pasien', compact('pasiens'));
    }

    // Menampilkan form untuk menambah pasien baru
    public function create()
    {
        $dokters = Dokter::all();
        return view('Dashboard.pendaftaran', compact('dokters'));
    }

    // Menyimpan data pasien baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_ktp' => 'required|unique:pasiens',
            'alamat' => 'required',
            'TTL' => 'required',
            'umur' => 'required|integer',
            'no_hp' => 'required',
            'dokter_id' => 'required|exists:dokters,id',
            'spesialis' => 'required',
            'tanggal' => 'required|date',
        ]);

        $dokters = Dokter::all();

        Pasien::create($request->all());
        return view('Dashboard.pendaftaran', compact('dokters') )->with('success', 'Pasien berhasil ditambahkan.');
    }

    // Menampilkan data pasien yang dipilih untuk diedit
    public function edit(Pasien $pasien)
    {
        $dokters = Dokter::all();
        return view('pasiens.edit', compact('pasien', 'dokters'));
    }

    // Menyimpan perubahan data pasien
    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama' => 'required',
            'no_ktp' => 'required|unique:pasiens,no_ktp,' . $pasien->id,
            'alamat' => 'required',
            'TTL' => 'required',
            'umur' => 'required|integer',
            'no_hp' => 'required',
            'dokter_id' => 'required|exists:dokters,id',
            'spesialis' => 'required',
            'tanggal' => 'required|date',
        ]);

        $dokters = Dokter::all();

        $pasien->update($request->all());
        return view('Dashboard.pendaftaran', compact('dokters') )->with('success', 'Data pasien berhasil diubah.');
    }

    // Menghapus data pasien
    public function destroy(pasien $pasien)
    {

        $dokters = Dokter::all();
        $pasien->delete();
        return view('Dashboard.pendaftaran', compact('dokters') )->with('success', 'Pasien berhasil dihapus.');
    }

}
