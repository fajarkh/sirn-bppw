@extends('layouts.app')

@section('content')
@section('title', 'Edit Data Penghuni')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <br>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('penghuni.update', $penghuni->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="col-12">
                           <div class="row">
                                <div class="col-md-9">
                                    <label for="inputNanme4" class="form-label">Nama Penghuni</label>
                                    <input type="text" name="nama" class="form-control" id="inputNanme4" value="{{$penghuni->nama}}">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputNanme4" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-select" aria-label="Default select example">
                                        <option disabled selected>Pilih Status</option>
                                        <option value="Sewa" {{$penghuni->status == "Sewa" ? "selected" : ""}}>Sewa</option>
                                        <option value="Sewa Beli" {{$penghuni->status == "Sewa Beli" ? "selected" : ""}}>Sewa Beli</option>
                                        <option value="Lunas" {{$penghuni->status == "Lunas" ? "selected" : ""}}>Lunas</option>
                                        <option value="Pelepasan Hakmil" {{$penghuni->status == "Pelepasan Hakmil" ? "selected" : ""}}>Pelepasan Hakmil</option>
                                        <option value="SHM" {{$penghuni->status == "SHM" ? "selected" : ""}}>SHM</option>
                                    </select>
                                </div>
                           </div>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="inputEmail4" value="{{$penghuni->alamat}}">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Kementerian</label>
                            <select name="lembaga_id" id="lembaga_id" class="form-select js-example-basic-single">
                                <option disabled selected >Pilih Kementerian</option>
                                @foreach ($instansi as $item)
                                    <option value="{{ $item->id }}" {{$penghuni->lembaga_id == $item->id ? "selected" : ""}}>{{ $item->nama }}</option>
                                @endforeach
                            </select>
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