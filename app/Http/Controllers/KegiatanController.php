<?php

namespace App\Http\Controllers;

use Alert;
use Image;
use App\Models\kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{

    public function index()
    {
        $data['kegiatan'] = kegiatan::orderBy('id', 'desc')->get();
        return view('pages.app.kegiatan.index', $data);
    }

    public function create()
    {
        return view('pages.app.kegiatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $kegiatan = new kegiatan();
        $kegiatan->nama = $request->nama;
        $kegiatan->keterangan = $request->keterangan;
        $kegiatan->jenis = $request->jenis;
        $kegiatan->link = $request->link;

        if ($image = $request->file('foto')) {
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $destinationPath = 'image/kegiatan';
            $img = Image::make($image->path());
            $img->resize(800, 500, function ($const) {
                $const->aspectRatio();
            })->save($destinationPath.'/'.$profileImage);
            
            $kegiatan->foto = "$profileImage";

            if(!empty($image->foto)){
                //remove the file image from public folder
                unlink('image/kegiatan/'.$image->profile_img);
            }
        }

        $kegiatan->save();
        Alert::success('Berhasil!', 'Kegiatan Telah Ditambah');
        return redirect()->route('kegiatan.index');
    }

    public function show(kegiatan $kegiatan)
    {
        //
    }

    public function edit($id)
    {
        $kegiatan = kegiatan::find($id);
        return view('pages.app.kegiatan.edit', compact('kegiatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $kegiatan = kegiatan::find($id);
        $kegiatan->nama = $request->nama;
        $kegiatan->link = $request->link;
        $kegiatan->keterangan = $request->keterangan;
        $kegiatan->jenis = $request->jenis;

        if ($image = $request->file('foto')) {
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            
            if(!empty($kegiatan->foto)){
                unlink('image/kegiatan/'.$kegiatan->foto);
            }

            $destinationPath = 'image/kegiatan';
            $img = Image::make($image->path());
            $img->resize(800, 500, function ($const) {
                $const->aspectRatio();
            })->save($destinationPath.'/'.$profileImage);
            
            $kegiatan->foto = "$profileImage";

            if(!empty($image->foto)){
                //remove the file image from public folder
                unlink('image/kegiatan/'.$image->profile_img);
            }

        }else{
            unset($kegiatan->foto);
        }


        $kegiatan->update();
        Alert::warning('Berhasil!', 'Kegiatan Telah Diubah');
        return redirect()->route('kegiatan.index');
    }

    public function destroy(kegiatan $kegiatan)
    {
        $kegiatan->delete();
        if(!empty($kegiatan->foto)){
            //hapus gambar dari folder public
            unlink('image/kegiatan/'.$kegiatan->foto);
        }

        alert()->success('Berhasil!','Data Telah Dihapus');
        return redirect()->route('kegiatan.index');
    }
}
