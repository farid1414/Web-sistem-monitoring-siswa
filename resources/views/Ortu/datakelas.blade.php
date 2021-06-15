@extends('layout.templateuser')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA KELAS')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/iconguru.png">
<link rel="stylesheet" href="/css/card.css">
@section('content')
   <div class="text">
      <p>Data Kelas</p>
   </div>
<div class="py-5">
    <div class="container">
      <div class="row hidden-md-up">
      @foreach($filtered as $filter)
        <div class="col-md-4">
          <div class="card" style="margin-top:14%;background-color: rgb(240, 248, 255,0.7)">
              <div class="image">
                  <img src="/gambar/iconsiswa.png" width="100%" alt="">
              </div>
            <div class="card-block">
              <h4 class="card-title">{{$filter->nama_kelas}}</h4>
              <h6 class="card-subtitle text-muted">Wali Kelas {{$filter->wali_kelas}}</h6>
              <div class="tombol">
                <a href="/Ortu/{{$filter->id}}/viewsiswa" class="btn btn-sm btn-primary">Lihat Siswa</a>
              </div>
            </div>
          </div>
        </div>  
        @endforeach
    </div>
  </div>  
@endsection