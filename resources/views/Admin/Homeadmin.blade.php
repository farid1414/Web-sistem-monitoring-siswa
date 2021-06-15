@extends('layout.template')
@extends('layout.Navbaradmin')

<!-- untuk mengirimkan title ke template -->
@section('tittle','DASHBOARD')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/admin.png">
@section('content')
  <div class="wrapper ">
    
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand">Dashboard</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
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
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons"><img src="/gambar/iconguru.png" alt="" width="90%"></i>
                  </div>
                  <p class="card-category">Jumlah Guru</p>
                  <h3 class="card-title">{{$data_tendik->count()}}
                    <small>Orang</small>
                  </h3>
                </div>
                <div class="card-footer">                 
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons"><img src="/gambar/iconsiswa.png" width="90%" alt=""></i>
                  </div>
                  <p class="card-category">Jumlah Siswa</p>
                  <h3 class="card-title">{{$siswa->count()}}
                  <small>Orang</small>
                  </h3>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons"><img src="/gambar/mapel.png" width="90%" alt=""></i>
                  </div>
                  <p class="card-category">Jumlah Mapel</p>
                  <h3 class="card-title">{{$mapel->count()}}
                  <small>Mapel</small>
                  </h3>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons"><img src="/gambar/kelas.png" width="90%" alt=""></i>
                  </div>
                  <p class="card-category">Jumlah Kelas</p>
                  <h3 class="card-title">{{$kelas->count()}}
                  <small>Kelas</small>
                  </h3>
                </div>
                <div class="card-footer">
                  
                </div>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons"><img src="/gambar/rating.png" width="90%" alt=""></i>
                  </div>
                  <p class="card-category">Jumlah Pemberi Rating</p>
                  <h3 class="card-title">{{$rating->count()}}
                  <small>Respon</small>
                  </h3>
                </div>
                <div class="card-footer">
                  
                </div>
              </div>
            </div>
          </div>
          
    </div>
  </div>

  @endsection