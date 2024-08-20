<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konten extends Model
{
    
    use HasFactory;
    
    protected $table = 'kontens';
    
    protected $fillable = [
        'waktu',
        'nama_kegiatan',
        'pemateri',
        'lokasi',
    ];
}
