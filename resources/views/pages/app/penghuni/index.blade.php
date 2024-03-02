@extends('layouts.app')
@section('content')
@section('title', 'Penghuni Rumah Negara')
@include('sweetalert::alert')

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @if (Auth::check() && Auth::user()->role  == "superadmin")
                    <div class="pull-right mb-2 mt-2 float-end">
                        <a class="btn btn-primary" href="/penghuni/create">
                            <i class="bi bi-folder-plus"></i> Tambah Penghuni
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
                            <th>Status</th>
                            <th>Alamat</th>
                            <th>Kementerian / Instansi</th>
                            @if (Auth::check() && Auth::user()->role  == "superadmin")
                            <th style="width:4%">Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penghuni as $index => $item)
                        <tr>
                            <td style="text-align: center;">{{ $index+1 }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>
                                <a href="#" class="{{$item->status == 'Sewa' ? 'btn btn-secondary' : (($item->status == 'Sewa Beli') ? 'btn btn-primary' : 'btn btn-success') }} btn-sm" style="color:white">
                                    {{$item->status}}
                                </a>
                            </td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->lembaga->nama }}</td>
                            @if (Auth::check() && Auth::user()->role  == "superadmin")
                            <td style="text-align: center;">
                                <form action="{{ route('penghuni.destroy',$item->id) }}" method="Post">
                                    <a class="btn btn-warning btn-sm" href="{{ route('penghuni.edit',$item->id) }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
                                        <i class="bi bi-trash-fill" style="color:white"></i>
                                    </button>
                                </form>
                            </td>
                            @endif
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