@extends('layouts.app')
@section('content')
@section('title', 'Edit Users')
@include('sweetalert::alert')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <br>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('users.update', $users->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <label for="inputNanme4" class="form-label">Nama</label>
                                    <input type="text" name="name" class="form-control" id="inputNanme4" value="{{ $users->name }}">
                                </div>
                                <div class="col-6">
                                    <label for="inputNanme4" class="form-label">Role</label>
                                        <select name="role" id="role" class="form-select" aria-label="Default select example" {{$users->role == 'admin' ? 'disabled' : ''}}>
                                            <option value="admin" {{$users->role == 'admin' ? 'selected' : ''}} >Admin</option>
                                            <option value="superadmin" {{$users->role == 'superadmin' ? 'selected' : ''}} >Super Admin</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                          <div class="row">
                            <div class="col-6">
                                <label for="inputEmail4" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="inputEmail4" value="{{ $users->username }}">
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