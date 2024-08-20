<?php

namespace App\Http\Controllers;

use App\Models\konten;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;



class KontenController extends Controller
{

    public function show(): View
    {
        $content = konten::all();
    
        return view('admin.content' , compact('content'));

    }

    public function create(): View
    {
        return view('admin.dkonten');
    }

    public function store(Request $request): RedirectResponse
    {
        konten::create([
            'waktu' => $request->waktu,
            'nama_kegiatan' => $request->nama_kegiatan,
            'pemateri' => $request->pemateri,
            'lokasi'=> $request->lokasi,
        ]);

        return redirect()->route('admin.content')->with('success', 'Data has been added');
    }
// Delete
    public function destroy($id): RedirectResponse
    {
        $content = konten::findOrFail($id);
        $content->delete();

        return redirect()->route('admin.content')->with('success', 'Product has been deleted');
    }
    

// Update 
// public function update(Request $request, $id): RedirectResponse
// {
//     $daftar = content::findOrFail($id);
//     return view('admin.update', $id)->with('success', 'Product updated successfully');
// }

}
