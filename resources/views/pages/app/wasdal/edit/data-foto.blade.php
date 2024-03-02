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

                                <h5 class="card-title">Foto Rumah</h5>

                                <div class="col-md-6 form-floating mb-3">
                                    <input class="form-control" type="file" id="formFile" name="foto_rumah1" accept="image/*" id="floatingInput">
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input class="form-control" type="file" id="formFile" name="foto_rumah2" accept="image/*" id="floatingInput">
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input class="form-control" type="file" id="formFile" name="foto_rumah3" accept="image/*" id="floatingInput">
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input class="form-control" type="file" id="formFile" name="foto_rumah4" accept="image/*" id="floatingInput">
                                </div>

                                <h5 class="card-title">Pembayaran 5%</h5>
                                <div class="col-md-6 form-floating mb-3">
                                    <input class="form-control" type="file" id="formFile" name="foto_5" accept="image/*" id="floatingInput">
                                </div>

                                <h5 class="card-title">Pembayaran Terakhir</h5>
                                <div class="col-md-6 form-floating mb-3">
                                    <input class="form-control" type="file" id="formFile" name="foto_pembayaran_akhir" accept="image/*" id="floatingInput">
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