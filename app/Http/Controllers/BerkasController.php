<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\berkas;
use App\Models\wasdal;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create()
    {
        $data['wasdal'] = wasdal::find(request()->wasdal_id);
        return view('pages.app.wasdal.berkas.create', $data);
    }

    public function store(Request $request)
    {
        //mengambil data file yang diupload
        $file           = $request->file('file');
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('file/berkaspenghuni',$file->getClientOriginalName());

        $berkas = new berkas();
        $berkas->wasdal_id = $request->wasdal_id;
        $berkas->jenis = $request->jenis;
        $berkas->keterangan = $request->keterangan;
        $berkas->file = $nama_file;

        $berkas->save();
        Alert::success('Berhasil!', 'Berkas Telah Ditambah');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['berkas'] = berkas::find($id);
        $data['wasdal'] = wasdal::find(request()->wasdal_id);
        return view('pages.app.wasdal.berkas.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $berkas = berkas::find($id);
        $berkas->jenis = $request->jenis;
        $berkas->keterangan = $request->keterangan;

        if (!empty($request->file)) {
            unlink('file/berkaspenghuni/'.$berkas->file);

            //mengambil data file yang diupload
            $file           = $request->file('file');
            //mengambil nama file
            $nama_file      = $file->getClientOriginalName();

            //memindahkan file ke folder tujuan
            $file->move('file/berkasrn',$file->getClientOriginalName());
            $berkasrn->file = $nama_file;
        }
        else {
            unset($berkas->file);
        }
        

        $berkasrn->update();
        Alert::warning('Berhasil!', 'Berkas Telah Diubah');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berkas = berkas::find($id);
        $berkas->delete();
        if(!empty($berkas->file)){
            //hapus gambar dari folder public/uploads
            unlink('file/berkaspenghuni/'.$berkas->file);
        }

        alert()->success('Berhasil!','Data Telah Dihapus');
        return back();
    }
}
