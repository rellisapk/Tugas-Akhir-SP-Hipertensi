@extends('layouts.app')

@section('content')
 <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">WASPADAI HIPERTENSI AKUT <br> KONSULTASIKAN GEJALAMU!</h2>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          <!-- <button type="button" class="btn-book-a-table" data-toggle="modal" data-target="#modalSaya">Konsultasi</button> -->
            <a id="modalKonsultasi2" class="btn-book-a-table">Konsultasi</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="http://rsuhaji.jatimprov.go.id/upload/artikel/hpertensi.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
</section>
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

    <div class="section-header">
        <p><span>Tipe Hipertensi</span></p>
    </div>

    <div class="row gy-4">
        <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
            <div>
            <h3>Hipertensi Primer</h3>
            <p>Hipertensi primer biasa disebut juga sebagai hipertensi esensial.
                Hipertensi primer merupakan peningkatan tekanan darah pada seseorang yang belum
                diketahui secara pasti penyebabnya.
                Hipertensi ini menjadi golongan hipertensi paling umum karena
                90% kasus hipertensi yang diderita oleh kebanyakan orang merupakan hipertensi primer</p>
            </div>
        </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
        <div class="info-item d-flex align-items-center">
            <div>
            <h3>Hipertensi Sekunder</h3>
            <p>Hipertensi sekunder merupakan peningkaan tekanan darah yang disebabkan oleh kondisi
                kesehatan lain dari para penderitanya. Hipertensi sekunder biasanya disebabkan
                oleh kondisi kesehatan seperti jantung, ginjal, arteri. Selain itu, kondisi
                hipertensi sekunder ini juga biasa terjadi pada kehamilan. </p>
            </div>
        </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
            <div>
            <h3>Hipertensi Resisten</h3>
            <p>Seseorang dikatakan mengalami hipertensi resisten bila tekanan
                darahnya cenderung tetap di bawah batas atas atau 140/90 mmHg,
                meskipun telah mengonsumsi tiga jenis obat antihipertensi. Hipertensi
                resisten merupakan gangguan yang paling umum dialami oleh pengidap hipertensi. </p>
            </div>
        </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
            <div>
            <h3>Hipertensi Maligna</h3>
            <p>Hipertensi maligna merupakan peningkatan tekanan darah yang sangat parah
                jika tidak cepat diobati, bahkan dapat menyebabkan kematian dalam waktu 3-6 bulan.
                Hipertensi maligna adalah hipertensi yang paling jarang terjadi, perbandingannya
                adalah 1:200 pada penderita hipertensi. </p>
        </div>
        </div><!-- End Info Item -->
    </div>
    </div>
</section>
<section id="chefs" class="chefs section-bg">
    <div class="container" data-aos="fade-up">

    <div class="section-header">
        <p><span>Cara Penggunaan</span></p>
    </div>

    <div class="row gy-4">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="chef-member">
            <div class="member-img">
            <i class="bi bi-1-square-fill"></i>
            </div>
            <div class="member-info">
            <h4>Pertama</h4>
            <p>Pilihlah gejala-gejala yang anda alami dengan
                memberikan nilai keyakinan pada setiap gejala.
            </p>
            </div>
        </div>
        </div><!-- End Chefs Member -->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="chef-member">
            <div class="member-img">
            <i class="bi bi-2-square-fill"></i>
            </div>
            <div class="member-info">
            <h4>Kedua</h4>
            <p>Sistem akan melakukan perhitungan mengenai keyakinan
                dari nilai yang telah pasien masukkan pada setiap gejala
                yang dialami.
            </p>
            </div>
        </div>
        </div><!-- End Chefs Member -->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
        <div class="chef-member">
            <div class="member-img">
            <i class="bi bi-3-square-fill"></i>
            </div>
            <div class="member-info">
            <h4>Ketiga</h4>
            <p>Terakhir, sistem akan menampilkan hasil diagnosa
                sesuai perhitungan yang telah dilakukan mengenai gejala-gejala
                yang dialami oleh pasien.
            </p>
            </div>
        </div>
        </div><!-- End Chefs Member -->

    </div>
    </div>
</section>

<!-- Modal Pertanyaan Diagnosis -->
<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSayaLabel">Tekanan Darah</h5>
        <button type="button" class="close" data-dismiss="modal" id="modalClose" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Diagnosa penyakit hipertensi digunakan bagi para pengguna yang memiliki riwayat penyakit hipertensi.
      Berapa tekanan darah terakhir anda ?
      <div class="modal-body">
      <input class="form-check-input" type="radio" name="td" id="td" value="L" > Lebih dari 140/100 mmHg<br>
      <input class="form-check-input" type="radio" name="tdk" id="td" value="K"> Kurang dari 140/100 mmHg
      </div>
    </div>
    </div>
  </div>
</div>

<!-- Modal Selamat -->
<div class="modal fade" id="modalAkhir" tabindex="-1" role="dialog" aria-labelledby="modalAkhirLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAkhirLabel">Anda Sehat</h5>
        <button type="button" class="close" data-dismiss="modal" id="modalClose" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Selamat, anda tidak mengalami hipertensi. Tetap jaga kesehatan dan gaya hidup sehat untuk mencegah hipertensi.
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="buttonSubmit">Oke</button>
      </div>
    </div>
  </div>
</div>

<script>
    $('#modalKonsultasi2').click(function () {
        $('#modalSaya').modal('show');
    });

    $('input[type="radio"][name="td"]').change(function(e) {
        if (e.target.checked) {
            window.location.href = "{{ route('konsultasi') }}";
            // window.location.replace(process.env.APP_URL + "/konsultasi");
        }
    });
    $('input[type="radio"][name="tdk"]').change(function(e) {
        if (e.target.checked) {
            $('#modalSaya').modal('hide');
            $('#modalAkhir').modal('show');
        }
    });
    $('#buttonSubmit').click(function () {
        $('#modalAkhir').modal('hide');
        $('.modal-backdrop').remove();
    });

    $('#modalClose').click(function () {
        $('#modalAkhir').modal('hide');
        $('#modalSaya').modal('hide');
        $('.modal-backdrop').remove();
    });
</script>
@endsection
