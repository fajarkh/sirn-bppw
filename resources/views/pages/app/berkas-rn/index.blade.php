@extends('layouts.app')
@section('content')
@section('title', 'Berkas Rumah Negara')
@include('sweetalert::alert')

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="pull-right mb-2 mt-2 float-end">
                        <a class="btn btn-primary" href="/berkas-rn/create">
                            <i class="bi bi-folder-plus"></i> Tambah Berkas RN
                        </a>
                    </div>
                    <br>
                    <br>

                    <!-- Table with stripped rows -->
                    <table id="myTable" class="table">
                    <thead>
                        <tr>
                            <th style="width:2%">No</th>
                            <th>Judul</th>
                            <th>Jenis</th>
                            <th style="width:4%">File</th>
                            <th style="width:4%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berkas as $index => $item)
                        <tr>
                            <td style="text-align: center;">{{ $index+1 }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>
                                <a href="#" class="btn btn-secondary btn-sm" style="color:white">{{ $item->jenis }}</a>
                            </td>
                            <td>
                                <a href="file/berkasrn/{{$item->file}}" class="btn btn-primary btn-sm">
                                    <i class="bi bi-file-earmark-pdf-fill"></i>
                                </a>
                            </td>
                            <td style="text-align: center;">
                                <form action="{{ route('berkas-rn.destroy',$item->id) }}" method="Post">
                                    @if(!empty($item->link))
                                    <a class="btn btn-info btn-sm" href="{{ $item->link }}" target="_blank">
                                        <i class="bi bi-card-image" style="color:white"></i>
                                    </a>
                                    @endif
                                    <a class="btn btn-warning btn-sm" href="{{ route('berkas-rn.edit',$item->id) }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    @if (Auth::check() && Auth::user()->role  == "superadmin")
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
                                        <i class="bi bi-trash-fill" style="color:white"></i>
                                    </button>
                                    @endif
                                </form>
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