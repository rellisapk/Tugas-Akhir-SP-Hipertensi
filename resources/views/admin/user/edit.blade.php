@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="section-header">
    <h1>Ubah Data Anggota</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item">Ubah Anggota</div>
    </div>
    </div>
    <div class="section-body">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
            <div class="container">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" value="{{$user->name}}" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{$user->email}}" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                <div class="form-group">
                <select class="form-control" name="role">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="password">Ganti Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                    <div class="form-group" style="float: right;">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
@endsection
