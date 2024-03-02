<?php

namespace App\Http\Controllers;

use Alert;
use Image;
use App\Models\wasdal;
use App\Models\berkas;
use Illuminate\Http\Request;

class WasdalController extends Controller
{

    public function index()
    {
        $data['wasdal'] = wasdal::orderBy('penghuni_id')->get();
        return view('pages.app.wasdal.index', $data);
    }

    public function create()
    {
        $penghuni = penghuni::orderBy('nama','asc')->get();
        return view('pages.app.wasdal.create', compact('penghuni'));
    }

    public function store(Request $request)
    {

        // request
            $wasdal = new wasdal();
            $wasdal->fill($request->all());

        // ==

        if ($image = $request->file('situasi')) {
            $profileImage = $request->hdno . "." . $image->getClientOriginalExtension();

            $destinationPath = 'image/wasdal/situasi';
            $img = Image::make($image->path());
            $img->resize(800, 500, function ($const) {
                $const->aspectRatio();
            })->save($destinationPath.'/'.$profileImage);
            
            $wasdal->situasi = "$profileImage";

            if(!empty($image->situasi)){
                //remove the file image from public folder
                unlink('image/wasdal/situasi/'.$image->profile_img);
            }
        }
        if ($image = $request->file('siteplan')) {
            $profileImage = $request->hdno . "." . $image->getClientOriginalExtension();

            $destinationPath = 'image/wasdal/siteplan';
            $img = Image::make($image->path());
            $img->resize(800, 500, function ($const) {
                $const->aspectRatio();
            })->save($destinationPath.'/'.$profileImage);
            
            $wasdal->siteplan = "$profileImage";

            if(!empty($image->siteplan)){
                //remove the file image from public folder
                unlink('image/wasdal/siteplan/'.$image->profile_img);
            }
        }
        if ($image = $request->file('foto_lingkungan2')) {
            $profileImage = $request->hdno . "." . $image->getClientOriginalExtension();

            $destinationPath = 'image/wasdal/lingkungan2';
            $img = Image::make($image->path());
            $img->resize(800, 500, function ($const) {
                $const->aspectRatio();
            })->save($destinationPath.'/'.$profileImage);
            
            $wasdal->foto_lingkungan2 = "$profileImage";

            if(!empty($image->foto_lingkungan2)){
                //remove the file image from public folder
                unlink('image/wasdal/lingkungan2/'.$image->profile_img);
            }
        }
        if ($image = $request->file('foto_lingkungan1')) {
            $profileImage = $request->hdno . "." . $image->getClientOriginalExtension();

            $destinationPath = 'image/wasdal/lingkungan1';
            $img = Image::make($image->path());
            $img->resize(800, 500, function ($const) {
                $const->aspectRatio();
            })->save($destinationPath.'/'.$profileImage);
            
            $wasdal->foto_lingkungan1 = "$profileImage";

            if(!empty($image->foto_lingkungan1)){
                //remove the file image from public folder
                unlink('image/wasdal/lingkungan1/'.$image->profile_img);
            }
        }
        if ($image = $request->file('foto_rumah1')) {
            $profileImage = $request->hdno . "." . $image->getClientOriginalExtension();

            $destinationPath = 'image/wasdal/foto_rumah1';
            $img = Image::make($image->path());
            $img->resize(800, 500, function ($const) {
                $const->aspectRatio();
            })->save($destinationPath.'/'.$profileImage);
            
            $wasdal->foto_rumah1 = "$profileImage";

            if(!empty($image->foto_rumah1)){
                //remove the file image from public folder
                unlink('image/wasdal/foto_rumah1/'.$image->profile_img);
            }
        }
        if ($image = $request->file('foto_rumah2')) {
            $profileImage = $request->hdno . "." . $image->getClientOriginalExtension();

            $destinationPath = 'image/wasdal/foto_rumah2';
            $img = Image::make($image->path());
            $img->resize(800, 500, function ($const) {
                $const->aspectRatio();
            })->save($destinationPath.'/'.$profileImage);
            
            $wasdal->foto_rumah2 = "$profileImage";

            if(!empty($image->foto_rumah2)){
                //remove the file image from public folder
                unlink('image/wasdal/foto_rumah2/'.$image->profile_img);
            }
        }
        if ($image = $request->file('foto_rumah3')) {
            $profileImage = $request->hdno . "." . $image->getClientOriginalExtension();

            $destinationPath = 'image/wasdal/foto_rumah3';
            $img = Image::make($image->path());
            $img->resize(800, 500, function ($const) {
                $const->aspectRatio();
            })->save($destinationPath.'/'.$profileImage);
            
            $wasdal->foto_rumah3 = "$profileImage";

            if(!empty($image->foto_rumah3)){
                //remove the file image from public folder
                unlink('image/wasdal/foto_rumah3/'.$image->profile_img);
            }
        }
        if ($image = $request->file('foto_rumah4')) {
            $profileImage = $request->hdno . "." . $image->getClientOriginalExtension();

            $destinationPath = 'image/wasdal/foto_rumah4';
            $img = Image::make($image->path());
            $img->resize(800, 500, function ($const) {
                $const->aspectRatio();
            })->save($destinationPath.'/'.$profileImage);
            
            $wasdal->foto_rumah4 = "$profileImage";

            if(!empty($image->foto_rumah4)){
                //remove the file image from public folder
                unlink('image/wasdal/foto_rumah4/'.$image->profile_img);
            }
        }
        if ($image = $request->file('foto_5')) {
            $profileImage = $request->hdno . "." . $image->getClientOriginalExtension();

            $destinationPath = 'image/wasdal/foto_5';
            $img = Image::make($image->path());
            $img->resize(800, 500, function ($const) {
                $const->aspectRatio();
            })->save($destinationPath.'/'.$profileImage);
            
            $wasdal->foto_5 = "$profileImage";

            if(!empty($image->foto_5)){
                //remove the file image from public folder
                unlink('image/wasdal/foto_5/'.$image->profile_img);
            }
        }
        if ($image = $request->file('foto_pembayaran_akhir')) {
            $profileImage = $request->hdno . "." . $image->getClientOriginalExtension();

            $destinationPath = 'image/wasdal/foto_pembayaran_akhir';
            $img = Image::make($image->path());
            $img->resize(800, 500, function ($const) {
                $const->aspectRatio();
            })->save($destinationPath.'/'.$profileImage);
            
            $wasdal->foto_pembayaran_akhir = "$profileImage";

            if(!empty($image->foto_pembayaran_akhir)){
                //remove the file image from public folder
                unlink('image/wasdal/foto_pembayaran_akhir/'.$image->profile_img);
            }
        }

        $wasdal->save();
        Alert::success('Berhasil!', 'Data Wasdal Telah Ditambah');
        return redirect()->route('wasdal.index');

    }

    public function show($id)
    {
        $data['wasdal'] = wasdal::find($id);
        $data['berkas'] = berkas::where('wasdal_id', $id)->get();
        return view('pages.app.wasdal.show', $data);
    }

    public function edit($id)
    {
        $wasdal = wasdal::find($id);
        return view('pages.app.wasdal.edit', compact('wasdal'));
    }

    public function ubahDataPenghuni()
    {
        $wasdal = wasdal::find(request()->wasdal_id);
        return view('pages.app.wasdal.edit.data-penghuni', compact('wasdal'));
    }
    public function ubahDataTeknis()
    {
        $wasdal = wasdal::find(request()->wasdal_id);
        return view('pages.app.wasdal.edit.data-teknis', compact('wasdal'));
    }
    public function ubahDataAngsuran()
    {
        $wasdal = wasdal::find(request()->wasdal_id);
        return view('pages.app.wasdal.edit.data-angsuran', compact('wasdal'));
    }
    public function ubahDataLokasi()
    {
        $wasdal = wasdal::find(request()->wasdal_id);
        return view('pages.app.wasdal.edit.data-lokasi', compact('wasdal'));
    }
    public function ubahDataFoto()
    {
        $wasdal = wasdal::find(request()->wasdal_id);
        return view('pages.app.wasdal.edit.data-foto', compact('wasdal'));
    }

    public function update(Request $request, $id)
    {

        // request
            $wasdal = wasdal::find($id);
            $wasdal->fill($request->all());
            
        // foto
            if ($image = $request->file('situasi')) {
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();


                $destinationPath = 'image/wasdal/situasi';
                $img = Image::make($image->path());
                $img->resize(800, 500, function ($const) {
                    $const->aspectRatio();
                })->save($destinationPath.'/'.$profileImage);
                
                $wasdal->situasi = "$profileImage";

                if(!empty($image->situasi)){
                    //remove the file image from public folder
                    unlink('image/wasdal/situasi/'.$image->profile_img);
                }
            }else {
                unset($wasdal->situasi);
            }

            if ($image = $request->file('siteplan')) {
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

                $destinationPath = 'image/wasdal/siteplan';
                $img = Image::make($image->path());
                $img->resize(800, 500, function ($const) {
                    $const->aspectRatio();
                })->save($destinationPath.'/'.$profileImage);
                
                $wasdal->siteplan = "$profileImage";

                if(!empty($image->siteplan)){
                    //remove the file image from public folder
                    unlink('image/wasdal/siteplan/'.$image->profile_img);
                }
            }else {
                unset($wasdal->siteplan);
            }

            if ($image = $request->file('foto_lingkungan2')) {
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                

                $destinationPath = 'image/wasdal/foto_lingkungan2';
                $img = Image::make($image->path());
                $img->resize(800, 500, function ($const) {
                    $const->aspectRatio();
                })->save($destinationPath.'/'.$profileImage);
                
                $wasdal->foto_lingkungan2 = "$profileImage";

                if(!empty($image->foto_lingkungan2)){
                    //remove the file image from public folder
                    unlink('image/wasdal/foto_lingkungan2/'.$image->profile_img);
                }
            }else {
                unset($wasdal->foto_lingkungan2);
            }

            if ($image = $request->file('foto_lingkungan1')) {
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();


                $destinationPath = 'image/wasdal/foto_lingkungan1';
                $img = Image::make($image->path());
                $img->resize(800, 500, function ($const) {
                    $const->aspectRatio();
                })->save($destinationPath.'/'.$profileImage);
                
                $wasdal->foto_lingkungan1 = "$profileImage";

                if(!empty($image->foto_lingkungan1)){
                    //remove the file image from public folder
                    unlink('image/wasdal/foto_lingkungan1/'.$image->profile_img);
                }
            }else {
                unset($wasdal->foto_lingkungan1);
            }

            if ($image = $request->file('foto_rumah1')) {
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();


                $destinationPath = 'image/wasdal/foto_rumah1';
                $img = Image::make($image->path());
                $img->resize(800, 500, function ($const) {
                    $const->aspectRatio();
                })->save($destinationPath.'/'.$profileImage);
                
                $wasdal->foto_rumah1 = "$profileImage";

                if(!empty($image->foto_rumah1)){
                    //remove the file image from public folder
                    unlink('image/wasdal/foto_rumah1/'.$image->profile_img);
                }
            }else {
                unset($wasdal->foto_rumah1);
            }

            if ($image = $request->file('foto_rumah2')) {
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();


                $destinationPath = 'image/wasdal/foto_rumah2';
                $img = Image::make($image->path());
                $img->resize(800, 500, function ($const) {
                    $const->aspectRatio();
                })->save($destinationPath.'/'.$profileImage);
                
                $wasdal->foto_rumah2 = "$profileImage";

                if(!empty($image->foto_rumah2)){
                    //remove the file image from public folder
                    unlink('image/wasdal/foto_rumah2/'.$image->profile_img);
                }
            }else {
                unset($wasdal->foto_rumah2);
            }

            if ($image = $request->file('foto_rumah3')) {
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();


                $destinationPath = 'image/wasdal/foto_rumah3';
                $img = Image::make($image->path());
                $img->resize(800, 500, function ($const) {
                    $const->aspectRatio();
                })->save($destinationPath.'/'.$profileImage);
                
                $wasdal->foto_rumah3 = "$profileImage";

                if(!empty($image->foto_rumah3)){
                    //remove the file image from public folder
                    unlink('image/wasdal/foto_rumah3/'.$image->profile_img);
                }
            }else {
                unset($wasdal->foto_rumah3);
            }
            
            if ($image = $request->file('foto_rumah4')) {
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();


                $destinationPath = 'image/wasdal/foto_rumah4';
                $img = Image::make($image->path());
                $img->resize(800, 500, function ($const) {
                    $const->aspectRatio();
                })->save($destinationPath.'/'.$profileImage);
                
                $wasdal->foto_rumah4 = "$profileImage";

                if(!empty($image->foto_rumah4)){
                    //remove the file image from public folder
                    unlink('image/wasdal/foto_rumah4/'.$image->profile_img);
                }
            }else {
                unset($wasdal->foto_rumah4);
            }

            if ($image = $request->file('foto_5')) {
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

                $destinationPath = 'image/wasdal/foto_5';
                $img = Image::make($image->path());
                $img->resize(800, 500, function ($const) {
                    $const->aspectRatio();
                })->save($destinationPath.'/'.$profileImage);
                
                $wasdal->foto_5 = "$profileImage";

                if(!empty($image->foto_5)){
                    //remove the file image from public folder
                    unlink('image/wasdal/foto_5/'.$image->profile_img);
                }
            }else {
                unset($wasdal->foto_5);
            }

            if ($image = $request->file('foto_pembayaran_akhir')) {
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();


                $destinationPath = 'image/wasdal/foto_pembayaran_akhir';
                $img = Image::make($image->path());
                $img->resize(800, 500, function ($const) {
                    $const->aspectRatio();
                })->save($destinationPath.'/'.$profileImage);
                
                $wasdal->foto_pembayaran_akhir = "$profileImage";

                if(!empty($image->foto_pembayaran_akhir)){
                    //remove the file image from public folder
                    unlink('image/wasdal/foto_pembayaran_akhir/'.$image->profile_img);
                }
            }else {
                unset($wasdal->foto_pembayaran_akhir);
            }
        //

        $wasdal->save();
        Alert::warning('Berhasil!', 'Data Wasdal Telah Diubah');
        return back();
    }

    public function destroy(wasdal $wasdal)
    {
        //
    }
}
