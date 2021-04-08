<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/css/styles.css">
<link rel="icon" type="image/png" href="/gambar/Admin.png">

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
                        <a class="nav-link" href="/Admin/Homeadmin">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href=" {{route('logout')}}">
                            <div class="sb-nav-link-icon"><i class="fa fa-power-off"></i></div>
                            Logout
                        </a>
                    </div>
                    <div class="sb-sidenav-menu-heading" style="color: rgb(255, 248, 220, 0.6);">DATA 
                        <a class="nav-link" href="/Admin/dataguru">
                                <div class="sb-nav-link-icon"><i class="fa fa-database"></i></div>
                                Data Guru
                            </a>
                        <a class="nav-link" href="/Admin/datasiswa">
                            <div class="sb-nav-link-icon"><i class="fa fa-database"></i></div>
                            Data Siswa
                        </a>
                    </div>
                    
                    <div class="sb-sidenav-menu-heading" style="color: rgb(255, 248, 220, 0.6);">DATA SEKOLAH
                        <a class="nav-link" href="/Admin/datakelas">
                            <div class="sb-nav-link-icon"><i class="fa fa-university"></i></div>
                            Data Kelas
                        </a>
                        <a class="nav-link" href="/Admin/datawalikelas">
                            <div class="sb-nav-link-icon"><i class="fa fa-university"></i></div>
                            Data Wali Kelas
                        </a>
                        <a class="nav-link" href="/Admin/datamatapelajaran">
                            <div class="sb-nav-link-icon"><i class="fa fa-sitemap"></i></div>
                            Daftar Mata Pelajaran
                        </a>
                        <a class="nav-link" href="/Admin/datajadwalguru">
                            <div class="sb-nav-link-icon"><i class="fa fa-calendar"></i></div>
                            Jadwal Guru Mengajar 
                        </a>
                        <a class="nav-link" href="/Admin/datajadwalpelajaran">
                            <div class="sb-nav-link-icon"><i class="fa fa-calendar"></i></div>
                            Jadwal Pelajaran
                        </a>
                            
                    </div>

                    <div class="sb-sidenav-menu-heading" style="color: rgb(255, 248, 220, 0.6);">DATA EMAIL
                        <a class="nav-link" href="/Admin/datauser">
                                <div class="sb-nav-link-icon"><i class="fa fa-database"></i></div>
                                Data User Email
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