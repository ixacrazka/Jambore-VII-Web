<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosTabel extends Model
{
    use HasFactory;

    protected $table = 'datapos';

    protected $fillable = [
        'nama_pos',
        'deskripsi',
        'qr_code',
        'kuota',
        'masuk',
        'tanggal',
    ];

    public function scan()
    {
        return $this->hasMany(Scan::class, 'pos_id', 'id');
    }
}
