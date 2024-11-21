<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomorAntrian extends Model
{
    use HasFactory;

    protected $fillable = [
        'pasien_id',
        'dokter_id',
        'nomor_antrian',
    ];

    // Relasi dengan model Pasien
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    // Relasi dengan model Dokter
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
