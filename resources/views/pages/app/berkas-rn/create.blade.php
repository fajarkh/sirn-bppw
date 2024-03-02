
@extends('layouts.app')
@section('content')
@section('title', 'Tambah Berkas Rumah Negara')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <br>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('berkas-rn.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="inputNanme4" class="form-label">Judul Berkas</label>
                                    <input type="text" name="nama" class="form-control" id="inputNanme4">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputNanme4" class="form-label">Jenis</label>
                                    <select name="jenis" id="jenis" class="form-select" aria-label="Default select example">
                                        <option disabled selected>Pilih Jenis File</option>
                                        <option value="Materi">Materi</option>
                                        <option value="Rekonreg">Rekonreg</option>
                                        <option value="Rekonprov">Rekonprov</option>
                                        <option value="Laporan">Laporan</option>
                                        <option value="Petugas">Petugas</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputEmail4" class="form-label">File</label>
                                    <input class="form-control" type="file" id="file" name="file" accept="application/*">
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