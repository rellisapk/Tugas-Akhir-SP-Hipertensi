@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="section-header">
    <h1>Ubah Data Penyakit</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item">Ubah Penyakit</div>
    </div>
    </div>
    <div class="section-body">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
            <div class="container">
            <form action="{{ route('penyakit.update', $penyakit->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group">
                    <label for="kodepenyakit">Kode Penyakit</label>
                    <input type="text" name="kodepenyakit" value="{{$penyakit->kodepenyakit}}" id="kodepenyakit" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="namapenyakit">Nama Penyakit</label>
                    <input type="namapenyakit" name="namapenyakit" value="{{$penyakit->namapenyakit}}" id="namapenyakit" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="solusi">Solusi</label>
                    <input type="text" name="solusi" value="{{$penyakit->solusi}}" id="solusi" class="form-control" required>
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
