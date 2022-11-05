@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="section-header">
        <div class="col-md-10">
            <h1>Basis Pengetahuan</h1>
        </div>
        <div class="col-md-2">
            <a href="{{route('pengetahuan.create')}}" class="btn btn-success" style="float: right;">
            Tambah Basis Pengetahuan
            </a>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table_pengetahuan" width="100%">
                                <thead>
                                    <tr class="text-center">
                                    <th>#</th>
                                    <th>Nama Penyakit</th>
                                    <th>Nama Gejala</th>
                                    <th>Nilai CF</th>
                                    <th width='15%'>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($pengetahuans as $pengetahuan)
                                    <tr class="text-center">
                                        <td>{{++$i}}</td>
                                        <td>{{$pengetahuan->namapenyakit}}</td>
                                        <td>{{$pengetahuan->namagejala}}</td>
                                        <td>{{$pengetahuan->nilai_cf}}</td>
                                        <td>
                                        <form action="{{ route('pengetahuan.destroy', $pengetahuan->id) }}" method="POST">
                                            <a class="btn btn-primary btn-flat btn-xs" href="{{ route('pengetahuan.edit',  $pengetahuan->id)}}"><i class="fa fa-cog"></i></a>
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
    {{ $pengetahuans->links() }} </div>
</section>
@endsection
