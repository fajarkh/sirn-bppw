
@extends('layouts.app')
@section('content')
@section('title', 'Edit Dokumentasi Kegiatan')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <br>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="inputNanme4" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="inputNanme4" value="{{$kegiatan->nama}}">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputNanme4" class="form-label">Jenis</label>
                                    <select name="jenis" id="jenis" class="form-select" aria-label="Default select example">
                                        <option disabled selected>Pilih Jenis Kegiatan</option>
                                        <option value="Wasdal" {{$kegiatan->jenis == 'Wasdal' ? 'selected' : ''}}>Wasdal</option>
                                        <option value="Acara" {{$kegiatan->jenis == 'Acara' ? 'selected' : ''}}>Acara</option>
                                        <option value="Rekonreg" {{$kegiatan->jenis == 'Rekonreg' ? 'selected' : ''}}>Rekonreg</option>
                                        <option value="Rekonprov" {{$kegiatan->jenis == 'Rekonprov' ? 'selected' : ''}}>Rekonprov</option>
                                        <option value="kunjungan" {{$kegiatan->jenis == 'kunjungan' ? 'selected' : ''}}>Kunjungan</option>
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
                                <textarea class="form-control" style="height: 100px" name="keterangan">{{$kegiatan->keterangan}}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Gdrive</label>
                                <input type="text" name="link" class="form-control" id="inputNanme4" value="{{$kegiatan->link}}">
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