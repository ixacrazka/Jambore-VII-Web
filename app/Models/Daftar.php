<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    
    use HasFactory;
    
    protected $table = 'pesertas';
    
    protected $fillable = [
        'nama_anggota',
        'kwaran',
        'no_gudep',
        'tmpt_lahir',
        'tgl_lahir',
        'gol_darah',
        'agama',
        'nama_ortu',
        'alamat_rumah',
        'no_hp',
    ];
}
