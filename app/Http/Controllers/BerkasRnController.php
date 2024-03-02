<?php

namespace App\Http\Controllers;

use Image;
use Alert;
use App\Models\berkas_rn;
use Illuminate\Http\Request;

class BerkasRnController extends Controller
{
    public function index()
    {
        $data['berkas'] = berkas_rn::orderBy('jenis', 'desc')->get();
        return view('pages.app.berkas-rn.index', $data);
    }

    public function create()
    {
        return view('pages.app.berkas-rn.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        //mengambil data file yang diupload
        $file           = $request->file('file');
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('file/berkasrn',$file->getClientOriginalName());

        $berkasrn = new berkas_rn();
        $berkasrn->nama = $request->nama;
        $berkasrn->jenis = $request->jenis;
        $berkasrn->file = $nama_file;

        $berkasrn->save();
        Alert::success('Berhasil!', 'Berkas Telah Ditambah');
        return redirect()->route('berkas-rn.index');

    }

    public function show(berkas_rn $berkas_rn)
    {
        //
    }

    public function edit($id)
    {
        $berkas = berkas_rn::find($id);
        return view('pages.app.berkas-rn.edit', compact('berkas'));
    }

    public function update(Request $request, $id)
    {

        $berkasrn = berkas_rn::find($id);
        $berkasrn->nama = $request->nama;
        $berkasrn->jenis = $request->jenis;

        if (!empty($request->file)) {
            unlink('file/berkasrn/'.$berkasrn->file);

            //mengambil data file yang diupload
            $file           = $request->file('file');
            //mengambil nama file
            $nama_file      = $file->getClientOriginalName();

            //memindahkan file ke folder tujuan
            $file->move('file/berkasrn',$file->getClientOriginalName());
            $berkasrn->file = $nama_file;
        }
        else {
            unset($berkasrn->file);
        }
        

        $berkasrn->update();
        Alert::warning('Berhasil!', 'Berkas Telah Diubah');
        return redirect()->route('berkas-rn.index');
    }

    public function destroy(berkas_rn $berkas_rn)
    {
        $berkas_rn->delete();
        if(!empty($berkas_rn->file)){
            //hapus gambar dari folder public/uploads
            unlink('file/berkasrn/'.$berkas_rn->file);
        }

        alert()->success('Berhasil!','Data Telah Dihapus');
        return redirect()->route('berkas-rn.index');
    }
}
