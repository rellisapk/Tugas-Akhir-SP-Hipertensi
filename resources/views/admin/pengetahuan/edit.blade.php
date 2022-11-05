@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="section-header">
    <h1>Ubah Data Basis Pengetahuan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item">Ubah Basis Pengetahuan</div>
    </div>
    </div>
    <div class="section-body">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
            <div class="container">
            <form action="{{ route('pengetahuan.update', $pengetahuan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="penyakit_id">Penyakit ID</label>
                    <input type="text" name="penyakit_id" value="{{$pengetahuan->penyakit_id}}" id="penyakit_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="gejala_id">Gejala ID</label>
                    <input type="gejala_id" name="gejala_id" value="{{$pengetahuan->gejala_id}}" id="gejala_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nilai_cf">Nilai CF</label>
                    <input type="nilai_cf" name="nilai_cf" value="{{$pengetahuan->nilai_cf}}" id="nilai_cf" class="form-control" required>
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
