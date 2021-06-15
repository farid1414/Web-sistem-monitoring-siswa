<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','EDIT DATA KELAS')
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
                    <a class="navbar-brand">DATA KELAS</a>
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
                  <p class="card-category">{{$data_kelas->nama_kelas}}</p>
                </div>
                <div class="card-body">
                  <form action="/Admin/{{$data_kelas->id}}/ubahkelas" method="POST">
                  {{csrf_field()}}
                    </div>     
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="font-size:14px;">Nama Kelas</label>
                          <input type="text" name="nama_kelas" id="nama_kelas"  class="form-control" value="{{$data_kelas->nama_kelas}}">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="wali_kelas" class="form-label">Wali Kelas</label>
                        <select class="form-control" aria-label="Default select example" name="wali_kelas">
                            @foreach($guru as $guru)
                                @if($guru->nama_tendik == $data_kelas->wali_kelas)
                                    <option value="{{$guru->nama_tendik}}" selected="selected">{{$guru->nama_tendik}}</option>
                                @else
                                <option value="{{$guru->nama_tendik}}" >{{$guru->nama_tendik}}</option>
                                @endif
                            @endforeach
                         </select>
                    </div>

                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update</button>
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