@if (Auth::check() && Auth::user()->role  == "superadmin")
@extends('layouts.app')
@section('content')
@section('title', 'Tambah Users')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <br>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('users.store') }}" method="POST">
                    @csrf
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <label for="inputNanme4" class="form-label">Nama</label>
                                    <input type="text" name="name" class="form-control" id="inputNanme4">
                                </div>
                                <div class="col-6">
                                    <label for="inputNanme4" class="form-label">Role</label>
                                        <select name="role" id="role" class="form-select" aria-label="Default select example">
                                            <option value="admin" selected>Admin</option>
                                            <option value="superadmin">Super Admin</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                          <div class="row">
                            <div class="col-6">
                                <label for="inputEmail4" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-6">
                                <label for="inputEmail4" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="inputEmail4">
                            </div>
                          </div>
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
@endif