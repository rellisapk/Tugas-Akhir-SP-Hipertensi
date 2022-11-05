@extends('layouts.admin')

@section('content')
<section class="section">
<div class="section-header">
<h1>Beranda</h1>
</div>
<div class="section-body">
<div class="row">
    <div class="col-lg-12">
    <div class="card">
        <div class="container" style="margin: 15px 5px 15px 0;">
        <h3>Sistem yang akan berfungsi untuk membantu para penderita penyakit hipertensi dalam mendiagnosa
            tipe penyakit hipertensi yang diderita
        </h3>
        </div>
    </div>
    </div>
</div>
</div>

<div class="row">
<div class="col-lg-6 col-12">
    <div class="card card-statistic-1">
    <div class="card-icon bg-success">
        <i class="far fa-user"></i>
    </div>
    <div class="card-wrap">
        <div class="card-header">
        <h4>Jumlah Anggota</h4>
        </div>
        <div class="card-body">
        {{ App\Models\User::count()}}
        </div>
    </div>
    </div>
</div>
<div class="col-lg-6 col-12">
    <div class="card card-statistic-1">
    <div class="card-icon bg-primary">
        <i class="far fa-newspaper"></i>
    </div>
    <div class="card-wrap">
        <div class="card-header">
        <h4>Jumlah Penyakit</h4>
        </div>
        <div class="card-body">
        {{ App\Models\Penyakit::count()}}
        </div>
    </div>
    </div>
</div>
<div class="col-lg-6 col-12">
    <div class="card card-statistic-1">
    <div class="card-icon bg-success">
        <i class="fas fa-thermometer-full"></i>
    </div>
    <div class="card-wrap">
        <div class="card-header">
        <h4>Gejala</h4>
        </div>
        <div class="card-body">
        {{ App\Models\Gejala::count()}}
        </div>
    </div>
    </div>
</div>
<div class="col-lg-6 col-12">
    <div class="card card-statistic-1">
    <div class="card-icon bg-success">
        <i class="far fa-file"></i>
    </div>
    <div class="card-wrap">
        <div class="card-header">
        <h4>Basis Pengetahuan</h4>
        </div>
        <div class="card-body">
        {{ App\Models\Pengetahuan::count()}}
        </div>
    </div>
    </div>
</div>
</div>
</section>
@endsection
