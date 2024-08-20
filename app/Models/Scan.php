<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scan extends Model
{
    use HasFactory;

    protected $table = 'scans';

    protected $fillable = [
        'pos_id',
        'login_id',
        'scan_tipe',
        'waktu_scan',
    ];

    public function pos()
    {
        return $this->belongsTo(PosTabel::class, 'pos_id', 'id');
    }

    public function daftar()
    {
        return $this->belongsTo(Daftar::class, 'login_id', 'id');
    }
}
