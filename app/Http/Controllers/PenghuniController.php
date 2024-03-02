<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\lembaga;
use App\Models\penghuni;
use Illuminate\Http\Request;

class PenghuniController extends Controller
{

    public function index()
    {
        $data['penghuni'] = penghuni::orderBy('status', 'asc')->get();
        return view('pages.app.penghuni.index', $data);
    }

    public function create()
    {
        $instansi = lembaga::orderBy('id')->get();
        return view('pages.app.penghuni.create', compact('instansi'));
    }

    public function store(Request $request)
    {
        $penghuni = new penghuni();
        $penghuni->nama = $request->nama;
        $penghuni->alamat = $request->alamat;
        $penghuni->status = $request->status;
        $penghuni->lembaga_id = $request->lembaga_id;

        $penghuni->save();
        Alert::success('Berhasil!', 'Penghuni Telah Ditambah');
        return redirect()->route('penghuni.index');
    }

    public function show(penghuni $penghuni)
    {
        // 
    }

    public function edit($id)
    {
        $penghuni = penghuni::find($id);
        $instansi = lembaga::orderBy('id')->get();
        return view('pages.app.penghuni.edit', compact('penghuni', 'instansi'));
    }

    public function update(Request $request, $id)
    {
        $penghuni = penghuni::find($id);
        $penghuni->nama = $request->nama;
        $penghuni->alamat = $request->alamat;
        $penghuni->status = $request->status;
        $penghuni->lembaga_id = $request->lembaga_id;

        $penghuni->update();
        Alert::warning('Berhasil!', 'Data Penghuni Telah Diubah');
        return redirect()->route('penghuni.index');
    }

    public function destroy(penghuni $penghuni)
    {
        $penghuni->delete();
        alert()->success('Berhasil!','Data Telah Dihapus');
        return redirect()->route('penghuni.index');
    }
}
