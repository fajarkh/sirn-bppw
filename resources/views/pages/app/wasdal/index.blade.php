@extends('layouts.app')
@section('content')
@section('title', 'Data Wasdal Rumah Negara')
@include('sweetalert::alert')

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @if (Auth::check() && Auth::user()->role  == "superadmin")
                    <div class="pull-right mb-2 mt-2 float-end">
                        <a class="btn btn-primary" href="/wasdal/create">
                            <i class="bi bi-folder-plus"></i> Tambah Data Wasdal
                        </a>
                    </div>
                    @endif
                    <br>
                    <br>

                    <!-- Table with stripped rows -->
                    <table id="myTable" class="table">
                    <thead>
                        <tr sty>
                            <th style="width:2%">No</th>
                            <th>Nama Penghuni</th>
                            <th>HDNo</th>
                            <th>Status</th>
                            <th>Kementerian / Instansi</th>
                            <th style="width:4%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wasdal as $index => $item)
                        <tr>
                            <td style="text-align: center;">{{ $index+1 }}</td>
                            <td>{{ $item->penghuni->nama }}</td>
                            <td>{{ $item->hdno }}</td>
                            <td>
                                <a href="#" class="{{$item->penghuni->status == 'SHM' ? 'btn btn-success' : (($item->penghuni->status == 'Sewa Beli') ? 'btn btn-primary' : 'btn btn-secondary') }} btn-sm" style="color:white">
                                    {{ $item->penghuni->status }}
                                </a>
                            </td>
                            <td>{{ $item->penghuni->lembaga->nama }}</td>
                            <td style="text-align: center;">
                                <a class="btn btn-primary btn-sm" href="{{ route('wasdal.show',$item->id) }}">
                                    <i class="bi bi-info-circle"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>
        </div>
    </div>
</section>
@endsection