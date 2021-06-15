<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA JADWAL PELAJARAN')
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
                    <a class="navbar-brand">DATA JADWAL PELAJARAN</a>
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
    <!-- Tombol tambah data  -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data
        </button>

    <!-- akhir tombol tambah -->
            <!-- alert sukes data ditambah -->
            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <!-- akhir alert -->
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">DATA JADWAL GURU</h4>
                  <p class="card-category">Data Kelas di SMAN Srabaya</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th scope="col" cellpadding="170">ID Kelas</th>
                        <th scope="col" cellpadding="170">Kelas</th>
                        <th scope="col" cellpadding="170">Aksi</th>
                        <th scope="col" cellpadding="170">Jadwal Pelajaran</th>
                      </thead>
                      <tbody>
                      <?php $no=1 ?>
                      @foreach($data_kelas as $kelas)
                    <tr >
                        <td>{{$kelas->id}}</td>
                        <td>{{$kelas->nama_kelas}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary" ><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus')"><i class="fa fa-trash"></i></a>
                        </td>
                        <td>
                        <a  href="/Admin/{{$kelas->id}}/viewjadwal" class="btn btn-sm btn-primary" ><i class="fa fa-calendar"></i></a>
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