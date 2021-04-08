<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
<link rel="stylesheet" href="/css/styles.css">
<link rel="stylesheet" href="/css/cari.css">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

<!-- Navbar dan brand -->
<nav class="navbar" style="background-color: rgb(0, 191, 255); height:80px;">
    <a class="navbar-brand " href="/" style="color:black; font-family: 'Oswald', sans-serif;">
        <img src="/gambar/wuri.png" alt="" width="60" class="d-inline-block align-top">
        SISTEM MONITORING KEGIATAN SISWA
        <p class="text-center" style="margin-top: -33px; font-size:15px;">SMAN Surabaya</p>
    </a>
    <button class="btn btn-primary btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars" style="@media screen"></i></button>
</nav>
<!-- akhir navbar -->

<!-- Menu slide  -->
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading" style="color: rgb(255, 248, 220, 0.6);">Menu
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                    </div>
                    <div class="sb-sidenav-menu-heading" style="color: rgb(255, 248, 220, 0.6);">SISWA
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fa fa-database"></i></div>
                            Data Siswa
                        </a>
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fa fa-database"></i></div>
                            Data Orang tua
                        </a>
                    </div>
                    <div class="sb-sidenav-menu-heading" style="color: rgb(255, 248, 220, 0.6);">Nilai
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fas fa-layer-group"></i></div>
                            Daftar Nilai
                        </a>
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fa fa-plus"></i></div>
                            Masukkan Nilai
                        </a>
                    </div>
                    <div class="sb-sidenav-menu-heading" style="color: rgb(255, 248, 220, 0.6);">Tugas
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fas fa-sticky-note"></i></div>
                            Tabel Mapel
                        </a>
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fas fa-paperclip"></i></div>
                            Upload Tugas
                        </a>
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                            Cek Tugas
                        </a>

                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- akhir menu slide -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>