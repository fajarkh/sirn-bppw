
@extends('layouts.app')
@section('content')
@section('title', 'Tambah Dokumentasi Kegiatan')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <br>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="inputNanme4" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="inputNanme4">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputNanme4" class="form-label">Jenis</label>
                                    <select name="jenis" id="jenis" class="form-select" aria-label="Default select example">
                                        <option disabled selected>Pilih Jenis Kegiatan</option>
                                        <option value="Wasdal">Wasdal</option>
                                        <option value="Acara">Acara</option>
                                        <option value="Rekonreg">Rekonreg</option>
                                        <option value="Rekonprov">Rekonprov</option>
                                        <option value="Kunjungan">Kunjungan</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputEmail4" class="form-label">Foto</label>
                                    <input class="form-control" type="file" id="formFile" name="foto" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                          <div class="row">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Keterangan</label>
                                <textarea class="form-control" style="height: 100px" name="keterangan"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Gdrive</label>
                                <input type="text" name="link" class="form-control" id="inputNanme4">
                            </div>
                          </div>
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