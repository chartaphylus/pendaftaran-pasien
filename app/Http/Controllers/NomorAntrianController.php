<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\NomorAntrian;
use App\Models\pasien;
use Illuminate\Http\Request;

class NomorAntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function NomorAntrian()
{
    $antrians = NomorAntrian::with(['pasien', 'dokter'])->get();
    $pasiens = Pasien::all(); // Tambahkan ini untuk mendapatkan daftar pasien
    $dokters = Dokter::all(); // Jika diperlukan daftar dokter di view ini juga
    return view('Dashboard.admin-role.nomor-antrian', compact('antrians', 'pasiens', 'dokters'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $antrians = NomorAntrian::with(['pasien', 'dokter'])->get();
        $pasiens = pasien::all();
        $dokters = Dokter::all();
        return view('Dashboard.admin-role.data-pasien', compact('pasiens', 'dokters'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required|exists:pasiens,id',
            'dokter_id' => 'required|exists:dokters,id',
            'nomor_antrian' => 'required|integer',
        ]);

        NomorAntrian::create($request->all());

        return redirect()->route('nomorantrians.NomorAntrian')->with('success', 'Nomor antrian berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $nomorAntrian = NomorAntrian::findOrFail($id); // Ambil data nomor antrian berdasarkan ID
    $pasiens = Pasien::all(); // Ambil data pasien untuk dropdown
    $dokters = Dokter::all(); // Ambil data dokter untuk dropdown

    return view('nomorantrians.edit', compact('nomorAntrian', 'pasiens', 'dokters'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'pasien_id' => 'required|exists:pasiens,id',
            'dokter_id' => 'required|exists:dokters,id',
            'nomor_antrian' => 'required|integer',
        ]);
    
        // Mengambil data nomor antrian berdasarkan ID
        $nomorAntrian = NomorAntrian::findOrFail($id);
    
        // Memperbarui data nomor antrian
        $nomorAntrian->update($request->all());
    
        return redirect()->route('nomorantrians.NomorAntrian')->with('success', 'Nomor antrian berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Mengambil data nomor antrian berdasarkan ID
    $nomorAntrian = NomorAntrian::findOrFail($id);

    // Menghapus data nomor antrian
    $nomorAntrian->delete();

    return redirect()->route('nomorantrians.NomorAntrian')->with('success', 'Nomor antrian berhasil dihapus.');
    }
}
