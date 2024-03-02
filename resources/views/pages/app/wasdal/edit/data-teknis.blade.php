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
                                    <select class="form-select" name="tipe_rumah" id="floatingSelect" aria-label="Floating label select example">
                                        <option value="A" {{$wasdal->tipe_rumah == 'A' ? 'selected' : ''}}>A</option>
                                        <option value="B" {{$wasdal->tipe_rumah == 'B' ? 'selected' : ''}}>B</option>
                                        <option value="C" {{$wasdal->tipe_rumah == 'C' ? 'selected' : ''}}>C</option>
                                        <option value="D" {{$wasdal->tipe_rumah == 'D' ? 'selected' : ''}}>D</option>
                                        <option value="E" {{$wasdal->tipe_rumah == 'E' ? 'selected' : ''}}>E</option>
                                    </select>
                                    <label for="floatingSelect">Tipe Rumah</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="fungsi_rumah" class="form-control" id="floatingInput" value="{{$wasdal->fungsi_rumah}}">
                                    <label for="floatingInput">Fungsi Rumah</label>
                                </div>

                                <div class="col-md-12 form-floating mb-3">
                                    <input type="text" name="bentuk_rumah" class="form-control" id="floatingInput" value="{{$wasdal->bentuk_rumah}}">
                                    <label for="floatingInput">Perubahan Bentuk Rumah</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="luas_rumah1" class="form-control" id="floatingInput" value="{{$wasdal->luas_rumah1}}">
                                    <label for="floatingInput">Luas Rumah (PSB)</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="luas_rumah2" class="form-control" id="floatingInput" value="{{$wasdal->luas_rumah2}}">
                                    <label for="floatingInput">Pengukur Lapangan</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="luas_tanah1" class="form-control" id="floatingInput" value="{{$wasdal->luas_tanah1}}">
                                    <label for="floatingInput">Luas Tanah (PSB)</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="luas_tanah2" class="form-control" id="floatingInput" value="{{$wasdal->luas_tanah2}}">
                                    <label for="floatingInput">Pengukur Lapangan</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="latitude" class="form-control" id="floatingInput" value="{{$wasdal->latitude}}">
                                    <label for="floatingInput">Latitude</label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="longtitude" class="form-control" id="floatingInput" value="{{$wasdal->longtitude}}">
                                    <label for="floatingInput">Longtitude</label>
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