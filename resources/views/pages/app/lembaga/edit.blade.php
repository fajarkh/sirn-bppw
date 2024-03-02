@extends('layouts.app')

@section('content')
@section('title', 'Edit Kementerian')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <br>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('lembaga.update', $lembaga->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Nama Kementerian</label>
                            <input type="text" name="nama" class="form-control" id="inputNanme4" value="{{ $lembaga->nama }}">
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