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

                                <div class="col-md-6">
                                    <label for="floatingInput">Harga Rumah</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp.</span>
                                        <input type="text" name="harga_rumah" class="form-control" id="floatingInput" value="{{$wasdal->harga_rumah}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="floatingInput">Harga Tanah</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp.</span>
                                        <input type="text" name="harga_tanah" class="form-control" id="floatingInput" value="{{$wasdal->harga_tanah}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="floatingInput">Uang Muka</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp.</span>
                                        <input type="text" name="uang_muka" class="form-control" id="floatingInput" value="{{$wasdal->uang_muka}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="floatingInput">Angsuran Bulanan</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp.</span>
                                        <input type="text" name="angsuran_bulanan" class="form-control" id="floatingInput" value="{{$wasdal->angsuran_bulanan}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="floatingInput">Angsuran Terakhir</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp.</span>
                                        <input type="text" name="angsuran_terakhir" class="form-control" id="floatingInput" value="{{$wasdal->angsuran_terakhir}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="floatingInput">Angsuran Terbayar</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp.</span>
                                        <input type="text" name="angsuran_terbayar" class="form-control" id="floatingInput" value="{{$wasdal->angsuran_terbayar}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="floatingInput">Sisa Angsuran</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp.</span>
                                        <input type="text" name="sisa_angsuran" class="form-control" id="floatingInput" value="{{$wasdal->sisa_angsuran}}">
                                    </div>
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