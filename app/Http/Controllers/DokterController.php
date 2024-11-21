<?php

namespace App\Http\Controllers;


use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dokters()
    {
        $dokters = Dokter::all();
        return view('Dashboard.admin-role.dokters', compact('dokters'));
    }
    // menampilkan data untuk user
    public function showForUser()
   {
    // Ambil data dengan kolom tertentu menggunakan select
    $dokters = Dokter::select('nama', 'spesialis', 'hari', 'jam')->get();

    // Kirim data ke view 'dokters.user'
    return view('Dashboard.usser-role.dokter', compact('dokters'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dokters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'spesialis' => 'required|string',
            'hari' => 'required|string',
            'jam' => 'required',
            'pas_foto' => 'nullable|image|max:2048',
        ]);

        $dokter = new Dokter();
        $dokter->nama = $request->nama;
        $dokter->spesialis = $request->spesialis;
        $dokter->hari = $request->hari;
        $dokter->jam = $request->jam;
        
        if ($request->hasFile('pas_foto')) {
            $dokter->pas_foto = $request->file('pas_foto')->store('pas_fotos', 'public');
        }
        
        $dokter->save();

        return redirect()->route('dokters.dokters')->with('success', 'Data dokter berhasil ditambahkan.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dokters.show', compact('dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('Dokters.index', compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'nama' => 'required|string',
        'spesialis' => 'required|string',
        'hari' => 'required|string',
        'jam' => 'required',
        'pas_foto' => 'nullable|image|max:2048',
    ]);

    $dokter = Dokter::find($id);

    // Cek apakah data dokter ditemukan
    if (!$dokter) {
        return redirect()->route('dokters.dokters')->with('error', 'Data dokter tidak ditemukan.');
    }

    // Update data dokter
    $dokter->nama = $request->nama;
    $dokter->spesialis = $request->spesialis;
    $dokter->hari = $request->hari;
    $dokter->jam = $request->jam;

    if ($request->hasFile('pas_foto')) {
        // Hapus gambar lama jika ada
        if ($dokter->pas_foto && storage::disk('public')->exists($dokter->pas_foto)) {
           storage::disk('public')->delete($dokter->pas_foto);
        }
        
        // Simpan gambar baru
        $dokter->pas_foto = $request->file('pas_foto')->store('pas_fotos', 'public');
    }

    $dokter->save();

    return redirect()->route('dokters.dokters')->with('success', 'Data dokter berhasil diperbarui.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dokter = Dokter::find($id);

    // Cek apakah data dokter ditemukan
    if ($dokter) {
        $dokter->delete(); // Hapus data dokter
        return redirect()->route('dokters.dokters')->with('success', 'Data dokter berhasil dihapus.');
    } else {
        return redirect()->route('dokters.dokters')->with('error', 'Data dokter tidak ditemukan.');
    }
    }



    
}
