@extends('layouts.app')
@section('content')
@section('title', 'Data Wasdal Rumah Negara')
@include('sweetalert::alert')

<section class="section profile">
    <div class="row">
        <div class="col-12">

            <div class="card">
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
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#data-penghuni">Data Penghuni</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#data-teknis">Data Teknis</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#data-angsuran">Data Angsuran</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#data-lokasi">Data Lokasi</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#foto">Foto Rumah & Pembayaran</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#berkas">Berkas</button>
                    </li>

                </ul>
                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-overview" id="data-penghuni">
                        @include('pages.app.wasdal.show.data-penghuni')
                    </div>

                    <div class="tab-pane fade profile-overview" id="data-teknis">
                        @include('pages.app.wasdal.show.data-teknis')
                    </div>

                    <div class="tab-pane fade pt-3 profile-overview" id="data-angsuran">
                        @include('pages.app.wasdal.show.data-angsuran')
                    </div>

                    <div class="tab-pane fade pt-3 profile-overview" id="data-lokasi">
                        @include('pages.app.wasdal.show.data-lokasi')
                    </div>

                    <div class="tab-pane fade pt-3 profile-overview" id="foto">
                        @include('pages.app.wasdal.show.foto')
                    </div>

                    <div class="tab-pane fade pt-3" id="berkas">
                        @include('pages.app.wasdal.show.berkas')
                    </div>

                </div><!-- End Bordered Tabs -->

            </div>
            </div>

        </div>
    </div>
</section>

@endsection