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

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="utara" class="form-control" id="floatingInput" value="{{$wasdal->utara}}">
                                    <label for="floatingInput">Batas Utara</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="selatan" class="form-control" id="floatingInput" value="{{$wasdal->selatan}}">
                                    <label for="floatingInput">Batas Selatan</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="timur" class="form-control" id="floatingInput" value="{{$wasdal->timur}}">
                                    <label for="floatingInput">Batas Timur</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="barat" class="form-control" id="floatingInput" value="{{$wasdal->barat}}">
                                    <label for="floatingInput">Batas Barat</label>
                                </div>

                                <div class="col-md-12 form-floating mb-3">
                                    <input type="text" name="catatan" class="form-control" id="floatingInput" value="{{$wasdal->catatan}}">
                                    <label for="floatingInput">Catatan Penghuni</label>
                                </div>

                                <h5 class="card-title">Jangan Unggah Apabila Tidak Ingin Ganti Foto</h5>

                                <div class="col-md-6 form-floating mb-3">
                                    <input class="form-control" type="file" id="formFile" name="situasi" accept="image/*" id="floatingInput">
                                    <label for="floatingInput">Situasi = 200m</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input class="form-control" type="file" id="formFile" name="siteplan" accept="image/*" id="floatingInput">
                                    <label for="floatingInput">Siteplan = 20m</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input class="form-control" type="file" id="formFile" name="foto_lingkungan1" accept="image/*" id="floatingInput">
                                    <label for="floatingInput">Lingkungan 1</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input class="form-control" type="file" id="formFile" name="foto_lingkungan2" accept="image/*" id="floatingInput">
                                    <label for="floatingInput">Lingkungan 2</label>
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