<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{

    use HasFactory;

    protected $dokters = 'dokters';

    protected $fillable = [
        'nama',
        'spesialis',
        'hari',
        'jam',
        'pas_foto',
    ];

    public function pasiens()
{
    return $this->hasMany(Pasien::class);
}

}
