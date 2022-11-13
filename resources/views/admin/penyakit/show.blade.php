@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="section-header">
    <div class="col-md-10">
        <h1>Penyakit</h1>
    </div>
    <div class="col-md-2">
        <a href="{{route('penyakit.create')}}" class="btn btn-success" style="float: right;">
        Tambah Penyakit
        </a>
    </div>
    </div>

    <div class="section-body">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table_Penyakit" width="100%">
                <thead>
                    <tr class="text-center">
                    <th>#</th>
                    <th>Kode Penyakit</th>
                    <th>Nama Penyakit</th>
                    <th>Solusi</th>
                    <th width='15%'>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($penyakits as $penyakit)
                    <tr class="text-center">
                        <td>{{++$i}}</td>
                        <td>{{'P'. str_pad($penyakit->kodepenyakit, 2, '0', STR_PAD_LEFT)}}</td>
                        <td>{{$penyakit->namapenyakit}}</td>
                        <td>{{$penyakit->solusi}}</td>
                        <td>
                        <form action="{{ route('penyakit.destroy', $penyakit->id) }}" method="POST">
                            <a class="btn btn-primary btn-flat btn-xs" href="{{ route('penyakit.edit',  $penyakit->id)}}"><i class="fa fa-cog"></i></a>
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
    {{ $penyakits->links() }}
    </div>
</section>
@endsection
