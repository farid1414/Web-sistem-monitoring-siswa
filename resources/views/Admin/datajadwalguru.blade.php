<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA JADWAL GURU MENGAJAR')
<!-- untuk mengirimkan isi conten ke template -->
@section('content')

<!-- Css untuk menu pencarian -->
<link rel="stylesheet" href="/css/cari.css">

<div class="wrapper ">
    <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand">DATA KELAS</a>
                </div>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                    <div class="input-group no-border">
                        <form method="get" action="/Admin/datasiswa">
                            <input class="search" type="search" name="mencari" placeholder="Search..." aria-label="Search">
                            <button class="button" type="submit">Cari</button>
                        </form>
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
            <!-- alert sukes data ditambah -->
            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <!-- akhir alert -->
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">DATA Jadwal Guru Mengajar</h4>
                  <p class="card-category">Data Jadwal Guru di SMAN Srabaya</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      <th scope="col">No</th>
                        <th scope="col" cellpadding="170">NIP</th>
                        <th scope="col" cellpadding="170">Nama Guru</th>
                        <th scope="col" cellpadding="170">Jadwal Mengajar</th>
                      </thead>
                      <tbody>
                      <?php $no=1 ?>
                      @foreach($data_guru as $guru)
                    <tr class="pengguna">
                    <td scope="row"> {{$no++}}</td>
                    <td>{{$guru->nip}}</td>
                    <td>{{$guru->nama_tendik}}</td>  
                        <td style="">
                            <a href="/Admin/{{$guru->id}}/viewjadwalguru" style="font-weight:bold;" class="btn btn-sm btn-success">Jadwal</a>
                        
                        </td>
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