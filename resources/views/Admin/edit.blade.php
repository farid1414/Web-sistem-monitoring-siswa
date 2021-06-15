<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','EDIT DATA GURU')
<!-- untuk mengirimkan isi conten ke template -->
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
                    <a class="navbar-brand">DATA GURU</a>
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
                  <h4 class="card-title">Edit Data Guru</h4>
                  <p class="card-category">{{$data_tendik->nama_tendik}}</p>
                </div>
                <div class="card-body">
                  <form action="/Admin/{{$data_tendik->id}}/ubah" method="POST">
                  {{csrf_field()}}
                    </div>     
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="font-size:14px;">NIP</label>
                          <input type="text" name="nip" id="nip"  class="form-control" value="{{$data_tendik->nip}}" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="font-size:15px;">Nama</label>
                          <input type="text" name="nama_tendik" id="nama_tendik" class="form-control" value="{{$data_tendik->nama_tendik}}">
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating" style="font-size:15px;">Jenis Kelamin</label>
                            <select class="form-control" aria-label="Default select example" name="jenis_kelamin">
                                <option value="Laki-laki" @if($data_tendik->jenis_kelamin =='Laki-laki') selected @endif >Laki-Laki</option>
                                <option value="Perempuan" @if($data_tendik->jenis_kelamin =='Perempuan') selected @endif >Perempuan</option>
                            </select>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="font-size:15px;">Tanggal Lahir</label>
                          <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir"  value="{{$data_tendik->tgl_lahir}}">
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="font-size:15px;">Tanggal Diterima</label>
                          <input class="form-control" type="date" name="tgl_diterima" id="tgl_diterima" value="{{$data_tendik->tgl_diterima}}">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating" style="font-size:15px;">Alamat</label>
                            <textarea class="form-control" rows="3" >{{$data_tendik->alamat}}</textarea>
                          </div>
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