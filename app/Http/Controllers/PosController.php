<?php

namespace App\Http\Controllers;

use App\Models\PosTabel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;



class PosController extends Controller
{

    public function show(): View
    {
        $pos = PosTabel::all();

        return view('admin.pos', compact('pos'));
    }

    public function create(): View
    {
        return view('admin.datapos');
    }

    public function store(Request $request): RedirectResponse
    {
        PosTabel::create([
            'nama_pos' => $request->nama_pos,
            'deskripsi' => $request->deskripsi,
            'qr_code' => $request->qr_code,
            'kuota' => $request->kuota,
            'masuk' => $request->masuk,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('admin.pos')->with('success', 'Data has been added');
    }
    // Delete
    public function destroy($id): RedirectResponse
    {
        $pos = PosTabel::findOrFail($id);
        $pos->delete();

        return redirect()->route('admin.pos')->with('success', 'Product has been deleted');
    }

    public function edit($id)
    {
        $pos = PosTabel::findOrFail($id);

        return view('admin.datapos-edit', compact('pos'));
    }

    public function update($id, Request $request)
    {
        $pos = PosTabel::findOrFail($id);

        $pos->update([
            'nama_pos' => $request->nama_pos,
            'deskripsi' => $request->deskripsi,
            'qr_code' => $request->qr_code,
            'kuota' => $request->kuota,
            'masuk' => $request->masuk,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('admin.pos')->with('success', 'Data has been updated');
    }


    // Update 
    // public function update(Request $request, $id): RedirectResponse
    // {
    //     $pos = pos::findOrFail($id);
    //     return view('admin.update', $id)->with('success', 'Product updated successfully');
    // }

}
