@extends('layouts.app')
@section('content')
@section('title', 'Instansi')
@include('sweetalert::alert')

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @if (Auth::check() && Auth::user()->role  == "superadmin")
                    <div class="pull-right mb-2 mt-2 float-end">
                        <a class="btn btn-primary" href="/lembaga/create">
                            <i class="bi bi-folder-plus"></i> Tambah Kementerian
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
                            <th>Kementerian / Lembaga</th>
                            @if (Auth::check() && Auth::user()->role  == "superadmin")
                            <th style="width:4%">Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lembaga as $index => $item)
                        <tr>
                            <td style="text-align: center;">{{ $index+1 }}</td>
                            <td>{{ $item->nama }}</td>
                            @if (Auth::check() && Auth::user()->role  == "superadmin")
                            <td style="text-align: center;">
                                <form action="{{ route('lembaga.destroy',$item->id) }}" method="Post">
                                    <a class="btn btn-warning btn-sm" href="{{ route('lembaga.edit',$item->id) }}">
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