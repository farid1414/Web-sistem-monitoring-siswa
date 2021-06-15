<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA RATING')
<!-- untuk mengirimkan isi conten ke template -->
@section('content')

<!-- Css untuk menu pencarian -->
<link rel="stylesheet" href="/css/cari.css">
<link rel="stylesheet" href="/css/tabel.css">
<link rel="shortcut icon" type="text/css" href="/gambar/admin.png">
<div class="wrapper ">
    <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand">RATING DARI USER</a>
                </div>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                    <div class="input-group no-border">
                    </div>
                    </form>
                    <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route('logout')}}"" >
                        <i class="fa fa-power-off"></i>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
      <!-- End Navbar -->


      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">DATA RATING</h4>
                  <p class="card-category">Rating dari user </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th  scope="col">Nama</th>
                        <th  scope="col">Email</th>
                        <th  scope="col">Nilai Keindahan</th>
                        <th  scope="col">Nilai ketepatan</th>
                        <th  scope="col">Nilai Kegunaan </th>
                        <th  scope="col">Kritik</th>
                        <th  scope="col">Saran</th>
                      </thead>
                      <tbody>
                      <?php $no=1 ?>
                      @foreach($rating as $rate)
                    <tr>
                        <td scope="row">{{$no++}} </td>
                        <td>{{$rate->nama}}</td>
                        <td>{{$rate->email}}</td>
                        <td>{{$rate->keindahan}}</td>
                        <td>{{$rate->ketepatan}}</td>
                        <td>{{$rate->kegunaan}}</td>
                        <td>{{$rate->kritik}}</td>
                        <td>{{$rate->saran}}</td>
                    </tr>
                    @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
    </div>
</div>


@endsection