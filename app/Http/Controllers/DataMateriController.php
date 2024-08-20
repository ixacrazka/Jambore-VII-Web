<?php


namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\PosTabel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class DataMateriController extends Controller
{

    //Buat Tabel Materi
public function show(): View
{

    $materi = Materi::all();

    return view('admin.materi' , compact('materi'));

}

public function create(): View
{
    $pos=PosTabel::all();
    return view('admin.dmateri' , compact('pos'));
}

public function store(Request $request): RedirectResponse
{
    // dbugging
    // dd($request->all());
    Materi::create([
        'pos_id' => $request->pos_id,
        'nama_materi' => $request->nama_materi,
        'deskripsi' => $request->deskripsi,
    ]);

    return redirect()->route('admin.materi')->with('success', 'Data has been added');
}
// Delete
public function destroy($id): RedirectResponse
{
    $materi = Materi::findOrFail($id);
    $materi->delete();

    return redirect()->route('admin.materi')->with('success', 'Product has been deleted');
}

}
