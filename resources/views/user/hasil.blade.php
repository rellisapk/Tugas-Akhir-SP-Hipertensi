@extends('layouts.app')

@section('content')
<section id="contact" class="contact">
    <div class="container download_pdf" data-aos="fade-up">
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
                <div class="card" style="margin-top: 5%;">
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
                <div class="card" style="margin-top: 5%; margin-bottom: 30px;">
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
    </div>
    <button onclick="getPDF()" id="downloadbtn" class="btn btn-danger cetak_pdf" style="float: right; margin-right: 100px; margin-top: -20px">Cetak Hasil</button>
    <a href="{{route('konsultasi')}}" class="btn btn-warning" style="float: right; margin-left: 80px; margin-right: 20px;  margin-top: -20px">Diagnosa Ulang</a>
</section>
@endsection
<script>
function getPDF(){
    var HTML_Width = $(".download_pdf").width();
    var HTML_Height = $(".download_pdf").height();
    var top_left_margin = 15;
    var PDF_Width = HTML_Width+(top_left_margin*2);
    var PDF_Height = (PDF_Width*1.5)+(top_left_margin*2);
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;

    var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;


    html2canvas($(".download_pdf")[0],{allowTaint:true}).then(function(canvas) {
        canvas.getContext('2d');
        console.log(canvas.height+"  "+canvas.width);
        var imgData = canvas.toDataURL("image/jpeg", 1.0);
        var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
        pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);


        for (var i = 1; i <= totalPDFPages; i++) {
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
        }

        pdf.save("Hasil-Diagnosa-Sistem.pdf");
    });
};
</script>
