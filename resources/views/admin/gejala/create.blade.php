@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="section-header">
    <h1>Tambah Gejala</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="show.php">gejala</a></div>
        <div class="breadcrumb-item">Tambah Gejala</div>
    </div>
    </div>
    <div class="section-body">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
            <div class="container">
                <form action="{{ route('gejala.store') }}"method="POST">
                @csrf
                <div class="form-group">
                    <label for="kodegejala">Kode Gejala</label>
                    <input type="text" name="kodegejala" id="kodegejala" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="namagejala">Nama Gejala</label>
                    <input type="namagejala" name="namagejala" id="namagejala" class="form-control" required>
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
