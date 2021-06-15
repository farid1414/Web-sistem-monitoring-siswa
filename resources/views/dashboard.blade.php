@extends('layout.templateuser')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','DASHBOARD')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/dashboardicon.png">
<link rel="stylesheet" type="text/css" href="/css/dashboard.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Londrina+Solid&display=swap" rel="stylesheet">
@section('content')

    
    @if(auth()->user()->level =='guru')
      <div class="bg">
        <!-- ikon tugas -->
        <div class="row mx-auto" style="background-color:rgb(0, 255, 255,0.2); width:65%; margin-top:3%; padding-bottom:30px;">
            <div class=" card " style=" width: 18rem; border:none; text-align:center; margin-left:150px; background-color:rgb(0, 255, 255,0.1);">
                <a href="/Guru/tugassiswa" >
                    <img src=" /gambar/tugas.png" class="card-img" alt="..." style="width:64%; background:none; padding-top:4%; margin-left:-80%">
                </a>
            </div>
            <!-- Ikon jadwal pelajaran -->
            <div class="card mr-1 ml-1" style="width: 18rem; border:none;background-color:rgb(0, 255, 255,0.1) ">
                <a href="/Guru/jadwalpelajaran" style="color:black; background:none; text-decoration:none; font-weight:bold;">
                    <img src=" /gambar/jadwalp.png" class="card-img" alt="..." style="width:60%; background:none; padding-top:4%; margin-left:-40%;">
                </a>
            </div>
            <!-- Ikon jadwal data tugas -->
            <div class="card mr-1 ml-1" style="width: 18rem; border:none;background-color:rgb(0, 255, 255,0.1) ">
                <a href="/Guru/datatugas" style="color:black; background:none; text-decoration:none; font-weight:bold;">
                    <img src=" /gambar/datatugas.png" class="card-img" alt="..." style="width:60%; background:none; padding-top:4%; margin-left:215%; margin-top:-65%;">
                </a>
            </div>
        </div>
        
        <!-- ikon tugas -->
        <div class="row mx-auto" style="background-color:rgb(0, 255, 255,0.2); width:65%;  padding-top:15px; padding-bottom:30px;">
            <div class=" card " style=" width: 18rem; border:none; text-align:center; margin-left:150px; background-color:rgb(0, 255, 255,0.1);">
                <a href="/Guru/jadwalmengajar" >
                    <img src=" /gambar/jadwalm.png" class="card-img" alt="..." style="width:64%; background:none; padding-top:4%; margin-left:-80%">
                </a>
            </div>
            <!-- Ikon jadwal pelajaran -->
        <div class="card mr-1 ml-1" style="width: 18rem; border:none;background-color:rgb(0, 255, 255,0.1);  ">
                <a href="/Guru/daftarsiswa" style="color:black; background:none; text-decoration:none; font-weight:bold;">
                    <img src=" /gambar/nilai.png" class="card-img" alt="..." style="width:60%; background:none; padding-top:4%; margin-left:-40%;">
                </a>
            </div>
            <!-- Ikon jadwal data tugas -->
            <div class="card mr-1 ml-1" style="width: 18rem; border:none;background-color:rgb(0, 255, 255,0.1); ">
                <a href="/Guru/dataabsen" style="color:black; background:none; text-decoration:none; font-weight:bold;">
                    <img src=" /gambar/dataabsen.png" class="card-img" alt="..." style="width:60%; background:none; padding-top:4%; margin-left:215%; margin-top:-65%;">
                </a>
            </div>
        </div>
    </div>
    @endif


    @if(auth()->user()->level =='siswa')
        <!-- ikon tugas -->
    <div class="row mx-auto" style="background-color:rgb(0, 255, 255,0.2); width:65%; padding-top:35px; padding-bottom:25px;margin-top:2%;">
        <div class=" card " style=" width: 18rem; border:none; text-align:center; margin-left:150px; background-color:rgb(0, 255, 255,0.1);">
            <a href="/Siswa/daftartugas" >
                <img src=" /gambar/tugas.png" class="card-img" alt="..." style="width:60%; background:none; padding-top:13px; margin-right:80px;">
            </a>
        </div>

        <!-- Ikon jadwal pelajaran -->
        <div class="card mr-1 ml-1" style="width: 18rem; border:none;background-color:rgb(0, 255, 255,0.1); ">
            <a href="/Siswa/jadwalpelajaran" style="color:black; background:none; text-decoration:none; font-weight:bold;">
                <img src=" /gambar/jadwalp.png" class="card-img" alt="..." style="width:60%; background:none; padding-top:13px; margin-left:130px;">
            </a>
        </div>
    </div>

    <!-- ikon jadwal mengajar -->
    <div class="row mx-auto" style="background-color:rgb(0, 255, 255,0.2);  width:65%; padding-top:35px; padding-bottom:25px;">
        <div class=" card " style=" width: 18rem; border:none; text-align:center; margin-left:150px; background-color:rgb(0, 255, 255,0.1); ">
            <a href="/Siswa/absensiswa" style="color:black; background:none; text-decoration:none; font-weight:bold;">
                <img src=" /gambar/absensi.png" class="card-img" alt="..." style="width:60%; background:none; padding-top:10px; margin-right:80px;">
            </a>
        </div>

        <!-- Ikon jadwal nilai -->
        <div class="card mr-1 ml-1" style="width: 18rem; border:none;background-color:rgb(0, 255, 255,0.1); ">
            <a href="/Siswa/daftarkelas" style="color:black; background:none; text-decoration:none; font-weight:bold;">
                <img src=" /gambar/nilai.png" class="card-img" alt="..." style="width:60%; background:none; padding-top:10px; margin-left:130px;">
            </a>
        </div>
    </div>
    @endif


    @if(auth()->user()->level== '')
        <!-- ikon kelas 10 -->
    <div class="row mx-auto" style="background-color:rgb(0, 255, 255,0.2); width:65%; padding-top:30px;margin-top:3%; padding-bottom:25px;">
        <div class=" card " style=" width: 18rem; border:none; text-align:center; margin-left:150px; background-color:rgb(0, 255, 255,0.1);">
            <a href="/Ortu/kelas10" >
                <img src=" /gambar/kelas10.png" class="card-img" alt="..." style="width:60%; background:none; padding-top:13px; margin-right:80px;">
            </a>
        </div>

        <!-- Ikon kelas 11 -->
        <div class="card mr-1 ml-1" style="width: 18rem; border:none;background-color:rgb(0, 255, 255,0.1); ">
            <a href="/Ortu/kelas11" style="color:black; background:none; text-decoration:none; font-weight:bold;">
                <img src=" /gambar/kelas11.png" class="card-img" alt="..." style="width:60%; background:none; padding-top:13px; margin-left:130px;">
            </a>
        </div>
    </div>

    <!-- ikonkelas 12 -->
    <div class="row mx-auto" style="background-color:rgb(0, 255, 255,0.2);  width:65%; padding-top:1%; padding-bottom:1.5%;">
        <div class=" card " style=" width: 18rem; border:none; text-align:center; margin-left:150px; background-color:rgb(0, 255, 255,0.1); ">
            <a href="/Ortu/kelas12" style="color:black; background:none; text-decoration:none; font-weight:bold;">
                <img src=" /gambar/kelas12.png" class="card-img" alt="..." style="width:60%; background:none; padding-top:10px; margin-right:80px;">
            </a>
        </div>

        <!-- Ikon pemerian rating -->
        <div class="card mr-1 ml-1" style="width: 18rem; border:none;background-color:rgb(0, 255, 255,0.1);margin-top:2%; ">
            <a href="/rating" style="color:black; background:none; text-decoration:none; font-weight:bold;">
                <img src=" /gambar/rating.png" class="card-img" alt="..." style="width:60%; background:none; padding-top:10px; margin-left:130px;">
            </a>
        </div>
    </div>
    @endif



@endsection