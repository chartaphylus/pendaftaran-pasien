<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika nama tabel tidak sesuai dengan format jamak)
    protected $table = 'pasiens';

    // Properti yang dapat diisi
    protected $fillable = [
        'nama',
        'no_ktp',
        'alamat',
        'TTL',
        'umur',
        'no_hp',
        'dokter_id',
        'spesialis',
        'tanggal',
    ];

    // Relasi dengan model Dokter
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
