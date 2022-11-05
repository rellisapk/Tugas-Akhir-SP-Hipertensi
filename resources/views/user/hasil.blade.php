@extends('layouts.app')

@section('content')
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <br>
        <!-- <div class="col-md-12 col-sm-12 mb-3"> -->
        <h2 style="text-align: center;">Hasil Diagnosa</h2>
                <div class="card-body">
                <div class="card">
                    <div class="card-header" style="background-color: rgba(11, 156, 49, 0.4);">
                        <b>Gejala yang dialami</b>
                    </div>
                    <!-- <div class="jumbotron jumbotron-fluid"> -->
                        <div class="container">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table_Penyakit" width="100%">
                            <thead>
                                <tr>
                                    <th width=8% class="text-center">No</th>
                                    <th class="text-center">Gejala</th>
                                    <th class="text-center">Kondisi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 0;
                            ?>
                            @foreach($gejalas as $gejala)
                                <tr>
                                    <td class="text-center">{{$no+1}}</td>
                                    <td>{{ $gejala->namagejala }}</td>
                                    <td>{{$gejala->kondisi_user}}</td>
                                </tr>
                                <?php
                                    $no++
                                ?>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card" style="margin-top: 2%;">
                    <div class="card-header" style="background-color: rgba(255, 0, 0, 0.4);">
                        <b>Hasil Perhitungan Sistem</b>
                    </div>
                    <div class="card-body">
                    <div class="container">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table_Penyakit" width="100%">
                        <thead>
                            <tr>
                                <th width=8% class="text-center">No</th>
                                <th class="text-center">Penyakit</th>
                                <th class="text-center">Presentase</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 0;
                        ?>
                            @foreach ($penyakits as $penyakit)
                            <tr>
                                <td class="text-center">{{$no+1}}</td>
                                <td>{{$penyakit->namapenyakit }}</td>
                                <td>{{$penyakit->persen}}</td>
                            </tr>
                            <?php
                            $no++
                            ?>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
                <div class="card" style="margin-top: 2%;">
                    <div class="card-header" style="background-color: rgba(255, 143, 0, 1);">
                        <b>Kesimpulan</b>
                    </div>
                    <div class="card-body">
                        <p class='font-size: 20px' style='text-align: justify;'>Berdasarkan kondisi yang telah anda pilih pada halaman sebelumnya, dapat disimpulkan bahwa anda
                        terdapat kemungkinan anda mengalami <b><?php echo $nmpkt[1] ?></b> dengan tingkat akurasi sebesar <b>"<?php echo number_format($vlpkt[1] * 100, 2)?>"%.</b></p>
                        <p class='font-size: 20px' style='text-align: justify;'><b>Solusi penanganan: </b><?php echo $solusi_penyakit[$idpkt[1]] ?>. </p>
                        <p class='font-size: 20px' style='text-align: justify; color: red;'>Jika anda mengalami gejala yang membutuhkan pertolongan secepatnya, segeralah berkunjung ke Puskesmas/Rumah
                        sakit terdekat untuk mendapatkan diagnosis langsung dan pengobatan cepat dari dokter.</p>
                    </div>
                </div>
            <!-- </div> -->
        <!-- </div> -->
    </div>
</section>
@endsection
