@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="section-header">
    <div class="col-md-10">
        <h1>Anggota</h1>
    </div>
    <div class="col-md-2">
        <a href="{{route('user.create')}}" class="btn btn-success" style="float: right;">
        Tambah Anggota
        </a>
    </div>
    </div>

    <div class="section-body">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table_anggota" width="100%">
                <thead>
                    <tr class="text-center">
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th width='15%'>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr class="text-center">
                        <td>{{++$i}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                            <a class="btn btn-primary btn-flat btn-xs" href="{{ route('user.edit',  $user->id)}}"><i class="fa fa-cog"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-flat btn-xs"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class=" d-flex justify-content-center pt-2 pagination">
    {{ $users->links() }}
    </div>
</section>
@endsection
