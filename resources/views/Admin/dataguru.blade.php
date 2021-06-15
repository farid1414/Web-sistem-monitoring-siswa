<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA GURU')
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
                    <a class="navbar-brand">DATA GURU</a>
                </div>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                    <div class="input-group no-border">
                        <form method="get" action="{{url()->current() }}">
                            <input class="search" type="search" name="cari" placeholder="Search..." aria-label="Search">
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
    <!-- tobol export excel -->
            <div class="export" style="float:right">
                <a href="/Admin/export" class="btn btn-success">Export Excel</a>
            </div>
    <!-- Akhir tombo excel -->
            <!-- alert sukes data ditambah -->
            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <!-- akhir alert -->
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">DATA GURU</h4>
                  <p class="card-category">Data Guru SMAN Srabaya</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th  scope="col">NIP</th>
                        <th  scope="col">Nama Guru</th>
                        <th  scope="col">User id Email</th>
                        <th  scope="col">JK</th>
                        <th width="10%" >Tanggal lahir </th>
                        <th  scope="col">Alamat</th>
                        <th  scope="col">Tanggal diterima</th>
                        <th width="14%" >Aksi</th>
                      </thead>
                      <tbody>
                      <?php $no=1 ?>
                      @foreach($data_guru as $guru)
                    <tr>
                        <td class="px-6 py-3 leading-6 text-center whitespace-nowrap">{{ ++$i }}</td>
                        <td>{{$guru->nip}}</td>
                        <td>{{$guru->nama_tendik}}</td>
                        <td>{{$guru->user_id}}</td>
                        <td>{{$guru->jenis_kelamin}}</td>
                        <td>{{$guru->tgl_lahir}}</td>
                        <td>{{$guru->alamat}}</td>
                        <td>{{$guru->tgl_diterima}}</td>
                        <td>
                            <a href="/Admin/{{$guru->id}}/edit" class="button btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="/Admin/{{$guru->id}}/hapus" class="button btn-sm btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data {{$guru->nama_tendik}}')"><i class="fa fa-trash"></i></a>
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
        {{$data_guru->links()}}
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
                <form action="/Admin/create" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="nip" class="form-label">Nip</label>
                        <input type="text" class="form-control" id="nip" name="nip">
                    </div>
                    <div class="mb-3">
                        <label for="nama_tendik" class="form-label">Nama Tendik</label>
                        <input type="text" class="form-control" id="nama_tendik" name="nama_tendik">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" aria-label="Default select example" name="jenis_kelamin">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">tgl lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat"> </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_diterima" class="form-label">Tgl Diterima</label>
                        <input type="date" class="form-control" id="tgl_diterima" name="tgl_diterima">
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