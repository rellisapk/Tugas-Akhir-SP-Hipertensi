@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="section-header">
    <h1>Ubah Data Gejala</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item">Ubah Gejala</div>
    </div>
    </div>
    <div class="section-body">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
            <div class="container">
            <form action="{{ route('gejala.update', $gejala->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group">
                    <label for="kodegejala">Kode Gejala</label>
                    <input type="text" name="kodegejala" value="{{$gejala->kodegejala}}" id="kodegejala" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="namagejala">Nama Gejala</label>
                    <input type="namagejala" name="namagejala" value="{{$gejala->namagejala}}" id="namagejala" class="form-control" required>
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
