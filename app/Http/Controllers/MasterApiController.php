<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\Kegiatan;
use App\Models\Login;
use App\Models\PosTabel;
use App\Models\Scan;
use Illuminate\Http\Request;

class MasterApiController extends Controller
{
    public function scan(Request $request)
    {
        $scanCode = $request->id;

        $pos = PosTabel::where('qr_code', '=', $scanCode);

        if ($pos->count() > 0) {
            return response()->json([
                'code' => 200,
                'data' => $pos->first(),
            ]);
        } else {
            return response()->json([
                'code' => 404,
                'data' => 'pos tidak ditemukan',
            ]);
        }
    }

    public function tambahScan(Request $request)
    {
        $no_hp = $request->no_hp;
        $qrcode_id = $request->qrcode_id;

        $pos = PosTabel::where('qr_code', '=', $qrcode_id)->first();

        $cekKegiatan = Kegiatan::where('no_hp', $no_hp)->where('pos_id', $pos->id)->count();

        if ($cekKegiatan < 1) {
            return response()->json([
                'code' => 404,
                'data' => 'Mohon Maaf Anda Tidak Terdaftar di Kegiatan Ini',
            ]);
        }

        $login = Daftar::where('no_hp', '=', $no_hp);

        if ($login->count() < 1) {
            return response()->json([
                'code' => 404,
                'data' => 'No HP / Telp Anda Tidak Ditemukan',
            ]);
        }

        $loginId = $login->first()->id;

        $scan = Scan::where('pos_id', "$pos->id")->where('login_id', "$loginId");

        if ($scan->count() > 0) {
            return response()->json([
                'code' => 11,
                'data' => 'Anda Sudah Pernah Scan',
            ]);
        } else {
            $attr = [
                'pos_id' => $pos->id,
                'login_id' => $loginId,
                'scan_tipe' => 'masuk',
                'waktu_scan' => now()
            ];

            Scan::create($attr);

            return response()->json([
                'code' => 200,
                'data' => 'Anda Sudah Berhasil Masuk',
            ]);
        }
    }
}
