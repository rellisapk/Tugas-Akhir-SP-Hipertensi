<!DOCTYPE html>
<html lang="en">

<head>
  <title>Beranda | Admin</title>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="/css/style.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="/admin/css/style.css">
  <link rel="stylesheet" href="/admin/css/components.css">
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
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            </ul>
        </form>
        <ul class="navbar-nav navbar-right">
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="/admin/img/avatar-1.png" class="rounded-circle mr-1">
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route ('logout') }}" onclick="return confirm('Apakah anda yakin ingin keluar ?')"
                            class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i>Keluar
                        </a>
                  </div>
            </li>
        </ul>
    </nav>
      <div class="main-sidebar">
      <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="/admin/home">Admin Sistem Pakar</a>
        <hr style="margin-top: -5%;">
    </div>
    <ul class="sidebar-menu">
        <li>
            <a href="/admin/home" class="nav-link"><i class="fas fa-fire"></i><span>Beranda</span></a>
        </li>
        <li>
            <a href="/admin/user" class="nav-link"><i class="fas fa-user"></i><span>Anggota</span></a>
        </li>
        <li>
            <a href="/admin/penyakit" class="nav-link"><i class="fas fa-flask"></i><span>Penyakit</span></a>
        </li>
        <li>
            <a href="/admin/gejala" class="nav-link"><i class="fas fa-thermometer-full"></i><span>Gejala</span></a>
        </li>
        <li>
            <a href="/admin/pengetahuan" class="nav-link"><i class="fas fa-microchip"></i><span>Basis Pengetahuan</span></a>
        </li>
    </ul>
    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a>
        </a>
    </div>
    </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
      @yield('content')
      </div>

      <footer class="main-footer">
    <div class="footer-left">
        Dibuat Oleh Rellisa Puspa Kusuma
    </div>
    <div class="footer-right">
        2022
    </div>
</footer>
    </div>
  </div>
    <!-- General JS Scripts -->
    <script src="/js/jquery.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.nicescroll.min.js"></script>
    <script src="/js/moment.min.js"></script>
    <script src="/admin/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="/admin/js/scripts.js"></script>
    <script src="/admin/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="/admin/js/jquery.dataTables.min.js"></script>
    <script src="/admin/js/dataTables.bootstrap4.min.js"></script>
    <script src="/admin/js/sweetalert.min.js"></script>
</body>

</html>
