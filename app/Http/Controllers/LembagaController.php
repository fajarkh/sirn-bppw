<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\lembaga;
use Illuminate\Http\Request;

class LembagaController extends Controller
{

    public function index()
    {
        $data['lembaga'] = lembaga::orderBy('nama', 'desc')->get();
        return view('pages.app.lembaga.index', $data);
    }


    public function create()
    {
        return view('pages.app.lembaga.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            ['nama' => 'required'],
            ['nama.required' => 'Nama Harus Terisi']
        );

        $lembaga = new lembaga();
        $lembaga->nama = $request->nama;
        $lembaga->alamat = $request->alamat;

        $lembaga->save();
        Alert::success('Berhasil!', 'Instansi Telah Ditambah');
        return redirect()->route('lembaga.index');
    }

    public function show(lembaga $lembaga)
    {
        //
    }

    public function edit($id)
    {
        $lembaga = lembaga::find($id);
        return view('pages.app.lembaga.edit', compact('lembaga'));
    }

    public function update(Request $request,  $id)
    {
        $lembaga = lembaga::find($id);
        $lembaga->nama = $request->nama;
        $lembaga->alamat = $request->alamat;

        $lembaga->update();
        Alert::warning('Berhasil!', 'Instansi Telah Diubah');
        return redirect()->route('lembaga.index');
    }

    public function destroy(lembaga $lembaga)
    {
        $lembaga->delete();
        alert()->success('Berhasil!','Data Telah Dihapus');
        return redirect()->route('lembaga.index');
    }
}
