@extends('layouts.app')
@section('content')
@section('title', 'Tamu / Pengunjung')
@include('sweetalert::alert')

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="pull-right mb-2 mt-2 float-end">
                        <a class="btn btn-primary" href="/tamu/create">
                            <i class="bi bi-folder-plus"></i> Tambah Tamu / Pengunjung
                        </a>
                    </div>
                    <br>
                    <br>

                    <!-- Table with stripped rows -->
                    <table id="myTable" class="table">
                    <thead>
                        <tr>
                            <th style="width:2%">No</th>
                            <th>Nama Pengujung</th>
                            <th>Nama Instansi</th>
                            <th>Keperluan</th>
                            <th>Tanggal</th>
                            <th>Foto</th>
                            @if (Auth::check() && Auth::user()->role  == "superadmin")
                            <th style="width:4%">Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tamu as $index => $item)
                        <tr>
                            <td style="text-align: center;">{{ $index+1 }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->instansi }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>{{date('d-m-Y', strtotime($item->tanggal))}}</td>
                            <td>
                                <a href="#" class="pop">
                                    <img src="{{ (!empty($item->foto))? url('image/tamu/'.$item->foto):url('img/no-image.jpg') }}" alt="gambar" width="50" height="30">
                                </a>
                                <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">							   
                                        <div class="modal-content">         						      
                                            <div class="modal-body">                                                  
                                                <img src="{{ (!empty($item->foto))? url('image/tamu/'.$item->foto):url('img/no-image.jpg') }}" class="imagepreview" id="img-show" style="width: 100%;">                      
                                            </div>							    
                                        </div>								   
                                    </div>
                                </div>
                            </td>
                            @if (Auth::check() && Auth::user()->role  == "superadmin")
                            <td style="text-align: center;">
                                <form action="{{ route('tamu.destroy',$item->id) }}" method="Post">
                                    @if(!empty($item->link))
                                    <a class="btn btn-info btn-sm" href="{{ $item->link }}" target="_blank">
                                        <i class="bi bi-card-image" style="color:white"></i>
                                    </a>
                                    @endif
                                    <a class="btn btn-warning btn-sm" href="{{ route('tamu.edit',$item->id) }}">
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