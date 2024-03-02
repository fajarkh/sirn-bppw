@extends('layouts.app')

@section('content')
@section('title', 'Tambah Penghuni')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <br>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('penghuni.store') }}" method="POST">
                    @csrf
                        <div class="col-12">
                           <div class="row">
                                <div class="col-md-9">
                                    <label for="inputNanme4" class="form-label">Nama Penghuni</label>
                                    <input type="text" name="nama" class="form-control" id="inputNanme4">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputNanme4" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-select" aria-label="Default select example">
                                        <option disabled selected>Pilih Status</option>
                                        <option value="Sewa">Sewa</option>
                                        <option value="Sewa Beli">Sewa Beli</option>
                                        <option value="Lunas">Lunas</option>
                                        <option value="Pelepasan Hakmil">Pelepasan Hakmil</option>
                                        <option value="SHM">SHM</option>
                                    </select>
                                </div>
                           </div>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Kementerian</label>
                            <select name="lembaga_id" id="lembaga_id" class="form-select js-example-basic-single">
                                <option disabled selected >Pilih Kementerian</option>
                                @foreach ($instansi as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-left">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                    <!-- Vertical Form -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection