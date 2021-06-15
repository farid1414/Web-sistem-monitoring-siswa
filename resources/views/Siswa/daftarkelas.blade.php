@extends('layout.templateuser')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA KELAS')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/iconsiswa.png">
<link rel="stylesheet" href="/css/card.css">
@section('content')
   <div class="text">
      <p>Data Kelas</p>
   </div>
<div class="py-5">
    <div class="container">
      <div class="row hidden-md-up">
        <div class="col-md-4">
          <div class="card" style="margin-top:14%;background-color: rgb(240, 248, 255,0.7);top:50%;left:50%">
              <div class="image">
                  <img src="/gambar/iconsiswa.png" width="100%" alt="">
              </div>
            <div class="card-block">
              <h4 class="card-title">{{auth()->user()->kelas->nama_kelas}}</h4>
              <h6 class="card-subtitle text-muted">Wali Kelas </h6>
              <div class="tombol">
                <a href="/Siswa/{{auth()->user()->kelas->id}}/viewsiswa" class="btn btn-sm btn-primary">Lihat Kelas</a>
              </div>
            </div>
          </div>
        </div>  
    </div>
  </div>  
@endsection