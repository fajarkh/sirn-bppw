@extends('layouts.app')
@section('content')
@section('title', 'Tambah Berkas Penghuni')
@include('sweetalert::alert')

<section class="section">
    <div class="row">
        <div class="pull-left float-start">
            <a class="btn btn-danger" href="{{ route('wasdal.show',$wasdal->id) }}">
                <i class="ri-arrow-left-line"> Back</i>
            </a>
        </div>
        <br><br>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <br>
                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('berkas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input name="wasdal_id" type="hidden" value="{{request()->wasdal_id}}">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="inputNanme4" class="form-label">Nama Penghuni</label>
                                    <select name="wasdal_id" id="wasdal_id" class="form-select js-example-basic-single" disabled>
                                        <option value="{{ $wasdal->id }}">{{ $wasdal->penghuni->nama }}</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputNanme4" class="form-label">Jenis</label>
                                    <select name="jenis" id="jenis" class="form-select select-text" aria-label="Default select example">
                                        <option disabled selected>Pilih Jenis File</option>
                                        <option value="Permohonan Penerbitan SKTL">Permohonan Penerbitan SKTL</option>
                                        <option value="Permohonan Penyerahan SHM">Permohonan Penyerahan SHM</option>
                                        <option value="Permohonan Penyerahan Hakmilik Rumah & Tanah">Permohonan Penyerahan Hakmil Rumah & Tanah</option>
                                        <option value="Pelepasan Hakmilik">Pelepasan Hakmilik</option>
                                        <option value="Legger, Pengalihan Hak">Legger, Pengalihan Hak</option>
                                        <option value="SKTL Sewa">SKTL Sewa</option>
                                        <option value="SKTL Sewa Beli">SKTL Sewa Beli</option>
                                        <option value="PSB">PSB</option>
                                        <option value="Kartu Sewa">Kartu Sewa</option>
                                        <option value="Kartu Sewa Beli">Kartu Sewa Beli</option>
                                        <option value="SK Pensiun">SK Pensiun</option>
                                        <option value="KTP">KTP</option>
                                        <option value="KK">KK</option>
                                        <option value="SIP Gol III">SIP Gol III</option>
                                        <option value="SK Gol III">SK Gol III</option>
                                        <option value="Berita Acara & Penaksiran">Berita Acara & Penaksiran</option>
                                        <option value="Form Wasdal">Form Wasdal</option>
                                        <option value="Keterangan Kematian">Keterangan Kematian</option>
                                        <option value="Keterangan Janda/Duda">Keterangan Janda/Duda</option>
                                        <option value="Keterangan Tidak Dalam Jangkauan Sekolah">Keterangan Tidak Dalam Jangkauan Sekolah</option>
                                        <option value="Keterangan Domisili">Keterangan Domisili</option>
                                        <option value="Kuasa Waris">Kuasa Waris</option>
                                        <option value="Pernyataan Ahli Waris">Pernyataan Ahli Waris</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputEmail4" class="form-label">File</label>
                                    <input class="form-control" type="file" id="file" name="file" accept="application/*">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Keterangan</label>
                            <textarea class="form-control" style="height: 100px" name="keterangan"></textarea>
                        </div>
                        <div class="text-left">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <!-- Vertical Form -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection