<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Pakar Diagnosis Hipertensi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"> </script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"> </script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

  <style>
        .pagination svg {
        display: none;
    }
    .pagination nav div:last-child {
        display: none;
    }
  </style>
</head>

<body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="/home" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Sistem Pakar<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/home">Home</a></li>
          <li><a href="#" id="modalKonsultasi">Diagnosis</a></li>
          <li><a href="{{route('riwayat')}}">Riwayat</a></li>
          <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
      </nav><!-- .navbar -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- Main Content -->
  <div class="main-content">
      @yield('content')
    </div>

    <footer id="footer" class="footer">
    <div class="container">
        <p>Sistem Pakar Diagnosis Penyakit Hipertensi merupakan sebuah platform berbasis website untuk melakukan diagnosis mengenai jenis hipertensi agar pengguna dapat melakukan langkah awal dalam penanganan.</p>
    <div class="copyright">
        &copy; Copyright <strong><span>Rellisa Puspa Kusuma</span></strong>. All Rights Reserved
      </div>
    </div>
</footer>

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
      <input class="form-check-input" type="radio" name="td" id="td" value="L"> Lebih dari 140/100 mmHg<br>
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
    $('#modalKonsultasi').click(function () {
        $('#modalSaya').modal('show');
    });

    $('input[type="radio"][name="td"]').change(function(e) {
        if (e.target.checked) {
            window.location.href = "{{route('konsultasi')}}";
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
        window.location.href = "{{route('home')}}";
    });

    $('#modalClose').click(function () {
        $('#modalAkhir').modal('hide');
        $('#modalSaya').modal('hide');
        $('.modal-backdrop').remove();
    });
</script>

    <!-- Vendor JS Files -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
@yield('scripts')
