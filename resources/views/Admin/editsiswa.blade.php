<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','EDIT DATA SISWA')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/admin.png">
@section('content')

<!-- Css untuk menu pencarian -->
<link rel="stylesheet" href="/css/cari.css">
<link rel="stylesheet" href="/css/tabel.css">
<div class="wrapper ">
    <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand">DATA SISWA</a>
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
                  <h4 class="card-title">Edit Data Siswa</h4>
                  <p class="card-category">{{$data_siswa->nama_lengkap}}</p>
                </div>
                <div class="card-body">
                  <form action="/Admin/{{$data_siswa->id}}/ubahsiswa" method="POST">
                  {{csrf_field()}}
                    </div>     
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="font-size:14px;">No Induk</label>
                          <input type="text" name="no_induk" id="no_induk"  class="form-control" value="{{$data_siswa->no_induk}}" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="font-size:15px;">Nama Lengkap</label>
                          <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{$data_siswa->nama_lengkap}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="font-size:15px;">Nama Panggilan</label>
                          <input type="text" name="nama_panggilan" id="nama_panggilan" class="form-control" value="{{$data_siswa->nama_panggilan}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="font-size:15px;">Tempat Lahir </label>
                          <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{$data_siswa->tempat_lahir}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="font-size:15px;">Tanggal Lahir </label>
                          <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{$data_siswa->tgl_lahir}}">
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating" style="font-size:15px;">Jenis Kelamin</label>
                            <select class="form-control" aria-label="Default select example" name="jenis_kelamin">
                                <option value="Laki-laki" @if($data_siswa->jenis_kelamin =='Laki-laki') selected @endif >Laki-Laki</option>
                                <option value="Perempuan" @if($data_siswa->jenis_kelamin =='Perempuan') selected @endif >Perempuan</option>
                            </select>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="font-size:15px;">Kelas</label>
                          <input class="form-control" type="text" name="kelas" id="kelas"  value="{{$data_siswa->kelas_id}}">
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="font-size:15px;">Nama Ortu</label>
                          <input class="form-control" type="text" name="nama_ortu" id="nama_ortu" value="{{$data_siswa->nama_ortu}}">
                        </div>
                    </div>

                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Data</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
    </div>
</div>

@endsection