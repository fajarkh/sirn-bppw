@if (Auth::check() && Auth::user()->role  == "superadmin")
@extends('layouts.app')
@section('content')
@section('title', 'Users')
@include('sweetalert::alert')

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="pull-right mb-2 mt-2 float-end">
                        <a class="btn btn-primary" href="/users/create">
                            <i class="bi bi-folder-plus"></i> Tambah Users
                        </a>
                    </div>
                    <br>
                    <br>

                    <!-- Table with stripped rows -->
                    <table id="myTable" class="table">
                    <thead>
                        <tr>
                            <th style="width:2%">No</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Role</th>
                            <th style="width:4%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $item)
                        <tr>
                            <td style="text-align: center;">{{ $index+1 }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->role }}</td>
                            <td style="text-align: center;">
                                <form action="{{ route('users.destroy',$item->id) }}" method="Post">
                                    <a class="btn btn-warning btn-sm" href="{{ route('users.edit',$item->id) }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
                                        <i class="bi bi-trash-fill" style="color:white"></i>
                                    </button>
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
@endif