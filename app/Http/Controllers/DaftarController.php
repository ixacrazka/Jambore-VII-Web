<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\Kegiatan;
use App\Models\PosTabel;
use App\Models\Scan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;



class DaftarController extends Controller
{
    public function show(): View
    {
        $daftar = Daftar::all();

        return view('admin.daftar', compact('daftar'));
    }

    public function create(): View
    {
        return view('admin.peserta');
    }

    public function store(Request $request): RedirectResponse
    {
        Daftar::create([
            'nama_anggota' => $request->nama_anggota,
            'kwaran' => $request->kwaran,
            'no_gudep' => $request->no_gudep,
            'tmpt_lahir' => $request->tmpt_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gol_darah' => $request->gol_darah,
            'agama' => $request->agama,
            'alamat_rumah' => $request->alamat_rumah,
            'no_hp' => $request->no_hp,
            'nama_ortu' => $request->nama_ortu,
            'pangkalan' => $request->pangkalan,
        ]);

        return redirect()->route('admin.daftar')->with('success', 'Data has been added');
    }
    // Delete
    public function destroy($id): RedirectResponse
    {
        $daftar = Daftar::findOrFail($id);
        $daftar->delete();

        return redirect()->route('admin.daftar')->with('success', 'Product has been deleted');
    }
    //Tracking
    public function tracking($id)
    {
        $daftar = Daftar::findOrFail($id);
        $scan = Scan::with('pos', 'daftar')->where('login_id', $id)->get();

        return view('admin.tracking', compact('scan'));
    }


    //Tambah Kegiatan
    public function kegiatanDaftar()
    {
        return view('daftar-kegiatan');
    }

    public function kegiatanDaftarCek(Request $request)
    {
        $no_hp = $request->no_hp;
        $cek = Daftar::where('no_hp', $no_hp)->count();

        if ($cek == 0) {
            return redirect()->back()->with('alert', 'Nomor tidak ditemukan');
        }

        $peserta = Daftar::where('no_hp', $no_hp)->first();

        $activitiesID = Kegiatan::where('no_hp', $no_hp)->pluck('pos_id')->toArray();
        $activities = PosTabel::whereIn('id', $activitiesID)->get();
        $followedActivities = Scan::where('login_id', $peserta->id)->pluck('pos_id')->toArray();

        $pos = PosTabel::all();

        return view('tambah-kegiatan', compact('no_hp', 'pos', 'activities', 'followedActivities', 'peserta'));
    }

    public function kegiatanDaftarTambah(Request $request)
    {
        $no_hp = $request->no_hp;
        $kegiatanInput = $request->kegiatan;

        // Validasi input
        $request->validate([
            'kegiatan' => 'required|array|max:4',
        ], [
            '*.max' => "Maksimal yang dipilih adalah 4 item"
        ]);

        $kegiatan = Kegiatan::where('no_hp', $no_hp);
        $kegiatan->delete();

        foreach ($kegiatanInput as $row) {
            $dataPos = PosTabel::where('id', $row)->first();

            $data = [
                'no_hp' => $no_hp,
                'pos_id' => $dataPos->id
            ];

            $cek = Kegiatan::create($data);
        }

        return redirect()->back()->with('alert', 'Data Kegiatan Berhasil Ditambahkan');
    }
    //end Tambah Kegiatan

    //detail
    public function detailKegiatan(): View
    { {
            $daftar = Daftar::all();
            return view('detail.kegiatan' , compact('detail'));
        }
    }
}
