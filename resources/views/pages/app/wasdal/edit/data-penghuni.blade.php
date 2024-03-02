@extends('layouts.app')
@section('content')
@section('title', 'Data Wasdal Rumah Negara')
@include('sweetalert::alert')

<section class="section profile">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="pull-left float-start m-3">
                    <a class="btn btn-danger" href="{{ route('wasdal.show',$wasdal->id) }}">
                        <i class="ri-arrow-left-line"> Back</i>
                    </a>
                </div>

                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="{{asset('img/kosong.jpeg')}}" alt="Profile" class="rounded-circle">
                    <h2>{{$wasdal->penghuni->nama}} ({{$wasdal->penghuni->status}}) </h2>
                    <div class="social-links mt-2">
                        <b>{{$wasdal->provinsi}}</b>
                    </div>
                    <h3>{{$wasdal->hdno}}</h3>
                    <div class="social-links mt-2">
                        <b>{{$wasdal->penghuni->lembaga->nama}}</b>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-12">

            <div class="card">
                <div class="card-body pt-3">
                    <form class="row g-3" action="{{ route('wasdal.update' , $wasdal->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="col-12">
                            <div class="row">

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="provinsi" class="form-control" id="floatingInput" value="{{$wasdal->provinsi}}">
                                    <label for="floatingInput">Provinsi</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="kabupaten" class="form-control" id="floatingInput" value="{{$wasdal->kabupaten}}">
                                    <label for="floatingInput">Kabupaten</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="kecamatan" class="form-control" id="floatingInput" value="{{$wasdal->kecamatan}}">
                                    <label for="floatingInput">Kecamatan</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="hdno" class="form-control" id="floatingInput" value="{{$wasdal->hdno}}">
                                    <label for="floatingInput">HDNo</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="thn_bangunan" class="form-control" id="floatingInput" value="{{$wasdal->thn_bangunan}}">
                                    <label for="floatingInput">Tahun Bangunan</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="kontruksi" class="form-control" id="floatingInput" value="{{$wasdal->kontruksi}}">
                                    <label for="floatingInput">Kontruksi</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="no_sk" class="form-control" id="floatingInput" value="{{$wasdal->no_sk}}">
                                    <label for="floatingInput">No SK RNG III</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="date" name="tgl_sk" class="form-control" id="inputNanme4" value="{{$wasdal->tgl_sk}}">
                                    <label for="floatingInput">Tanggal</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="no_sip" class="form-control" id="floatingInput" value="{{$wasdal->no_sip}}">
                                    <label for="floatingInput">No SIP</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="date" name="tgl_sip" class="form-control" id="inputNanme4" value="{{$wasdal->tgl_sip}}">
                                    <label for="floatingInput">Tanggal</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="no_sk_penjualan" class="form-control" id="floatingInput" value="{{$wasdal->no_sk_penjualan}}">
                                    <label for="floatingInput">No SK Penjualan</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="date" name="tgl_sk_penjualan" class="form-control" id="inputNanme4" value="{{$wasdal->tgl_sk_penjualan}}">
                                    <label for="floatingInput">Tanggal</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="no_psb" class="form-control" id="floatingInput" value="{{$wasdal->no_psb}}">
                                    <label for="floatingInput">No PSB</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="date" name="tgl_psb" class="form-control" id="inputNanme4" value="{{$wasdal->tgl_psb}}">
                                    <label for="floatingInput">Tanggal</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <select class="form-select" name="status_penghuni" id="floatingSelect" aria-label="Floating label select example">
                                        <option value="PNS" {{$wasdal->status_penghuni == 'PNS' ? 'selected' : ''}}>PNS</option>
                                        <option value="Pensiun" {{$wasdal->status_penghuni == 'Pensiun' ? 'selected' : ''}}>Pensiun</option>
                                        <option value="Janda" {{$wasdal->status_penghuni == 'Janda' ? 'selected' : ''}}>Janda</option>
                                        <option value="Duda" {{$wasdal->status_penghuni == 'Duda' ? 'selected' : ''}}>Duda</option>
                                        <option value="Ahli Waris" {{$wasdal->status_penghuni == 'Ahli Waris' ? 'selected' : ''}}>Ahli Waris</option>
                                        <option value="Lainnya" {{$wasdal->status_penghuni == 'Lainnya' ? 'selected' : ''}}>Lainnya</option>
                                    </select>
                                    <label for="floatingSelect">Status Penghuni</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="ket_status" class="form-control" id="floatingInput" value="{{$wasdal->ket_status}}">
                                    <label for="floatingInput">Keterangan</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="sktl_sewa" class="form-control" id="floatingInput" value="{{$wasdal->sktl_sewa}}">
                                    <label for="floatingInput">SKTL Sewa</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="date" name="tgl_sktl_sewa" class="form-control" id="inputNanme4" value="{{$wasdal->tgl_sktl_sewa}}">
                                    <label for="floatingInput">Tanggal</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="date" name="mulai" class="form-control" id="inputNanme4" value="{{$wasdal->mulai}}">
                                    <label for="floatingInput">Mulai Sewa Beli</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="date" name="jatuh_tempo" class="form-control" id="inputNanme4" value="{{$wasdal->jatuh_tempo}}">
                                    <label for="floatingInput">Jatuh Tempo</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="sktl_sb" class="form-control" id="floatingInput" value="{{$wasdal->sktl_sb}}">
                                    <label for="floatingInput">SKTL Sewa Beli</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="date" name="tgl_sktl_sb" class="form-control" id="inputNanme4" value="{{$wasdal->tgl_sktl_sb}}">
                                    <label for="floatingInput">Tanggal</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="phm" class="form-control" id="floatingInput" value="{{$wasdal->phm}}">
                                    <label for="floatingInput">Pelepasan Hak Milik</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="date" name="tgl_phm" class="form-control" id="inputNanme4" value="{{$wasdal->tgl_phm}}">
                                    <label for="floatingInput">Tanggal</label>
                                </div>

                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection