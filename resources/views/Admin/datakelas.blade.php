<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA KELAS')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/admin.png">
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
                  <h4 class="card-title ">DATA Kelas</h4>
                  <p class="card-category">Data Kelas di SMAN Srabaya</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th scope="col" style="text-align:center">ID Kelas</th>
                        <th scope="col" style="text-align:center">Kelas</th>
                        <th scope="col" style="text-align:center">Wali Kelas</th>
                        <th scope="col" style="text-align:center">Aksi</th>
                        <th scope="col" style="text-align:center" >Jadwal Pelajaran</th>
                      </thead>
                      <tbody>
                      <?php $no=1 ?>
                      @foreach($data_kelas as $kelas)
                    <tr >
                        <td>{{$kelas->id}}</td>
                        <td>{{$kelas->nama_kelas}}</td>
                        <td>{{$kelas->wali_kelas}}</td>
                        <td>
                            <a href="/Admin/{{$kelas->id}}/editkelas" class="button" ><i class="fa fa-edit"></i></a>
                            <a href="/Admin/{{$kelas->id}}/deletekelas" class="button" onclick="return confirm('Apakah anda yakin untuk menghapus kelas {{$kelas->nama_kelas}}')"><i class="fa fa-trash"></i></a>
                        </td>
                        <td >
                        <a  href="/Admin/{{$kelas->id}}/viewjadwal" class="button" >Jadwal</a>
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

<!-- modal untuk tambah data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:535px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
            </div>
            <div class="modal-body">
                <form action="/Admin/createkelas" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="nama_kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="nama_kelas" name="nama_kelas">
                    </div>
                    <div class="mb-3">
                        <label for="wali_kelas" class="form-label">Wali Kelas</label>
                        <select class="form-control" aria-label="Default select example" name="wali_kelas">
                            @foreach($guru as $guru)
                                    <option value="{{$guru->nama_tendik}}">{{$guru->nama_tendik}}</option>
                            @endforeach
                         </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection