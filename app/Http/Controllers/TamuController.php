<?php

namespace App\Http\Controllers;

use Alert;
use Image;
use App\Uploads;
use App\Models\tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{

    public function index()
    {
        $data['tamu'] = tamu::orderBy('tanggal', 'desc')->get();
        return view('pages.app.tamu.index', $data);
    }

    public function create()
    {
        return view('pages.app.tamu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $tamu = new tamu();
        $tamu->nama = $request->nama;
        $tamu->instansi = $request->instansi;
        $tamu->keterangan = $request->keterangan;
        $tamu->tanggal = $request->tanggal;
        $tamu->link = $request->link;

        if ($image = $request->file('foto')) {
            $profileImage = $request->tanggal . "." . $image->getClientOriginalExtension();

            $destinationPath = 'image/tamu';
            $img = Image::make($image->path());
            $img->resize(800, 500, function ($const) {
                $const->aspectRatio();
            })->save($destinationPath.'/'.$profileImage);
            
            $tamu->foto = "$profileImage";

            if(!empty($image->foto)){
                //remove the file image from public folder
                unlink('image/tamu/'.$image->profile_img);
            }
        }

        $tamu->save();
        Alert::success('Berhasil!', 'Daftar Tamu Telah Ditambah');
        return redirect()->route('tamu.index');
    }

    public function show(tamu $tamu)
    {
        //
    }

    public function edit($id)
    {
        $tamu = tamu::find($id);
        return view('pages.app.tamu.edit', compact('tamu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $tamu = tamu::find($id);
        $tamu->nama = $request->nama;
        $tamu->instansi = $request->instansi;
        $tamu->link = $request->link;
        $tamu->keterangan = $request->keterangan;
        $tamu->tanggal = $request->tanggal;

        if ($image = $request->file('foto')) {
            $profileImage = $request->tanggal . "." . $image->getClientOriginalExtension();
            
            if(!empty($tamu->foto)){
                unlink('image/tamu/'.$tamu->foto);
            }

            $destinationPath = 'image/tamu';
            $img = Image::make($image->path());
            $img->resize(800, 500, function ($const) {
                $const->aspectRatio();
            })->save($destinationPath.'/'.$profileImage);
            
            $tamu->foto = "$profileImage";

            if(!empty($image->foto)){
                //remove the file image from public folder
                unlink('image/tamu/'.$image->profile_img);
            }

        }else{
            unset($tamu->foto);
        }


        $tamu->update();
        Alert::warning('Berhasil!', 'Daftar Tamu Telah Diubah');
        return redirect()->route('tamu.index');
    }

    public function destroy(tamu $tamu)
    {
        $tamu->delete();
        if(!empty($tamu->foto)){
            //hapus gambar dari folder public
            unlink('image/tamu/'.$tamu->foto);
        }

        alert()->success('Berhasil!','Data Telah Dihapus');
        return redirect()->route('tamu.index');

    }
}
