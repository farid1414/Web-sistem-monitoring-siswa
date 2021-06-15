<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA SISWA')
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
                    <a class="navbar-brand">DATA SISWA</a>
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
        <!-- tobol export excel -->
        <div class="export" style="float:right">
                <a href="/Admin/exportsiswa" class="btn btn-success">Export Excel</a>
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
                  <h4 class="card-title ">DATA Siswa</h4>
                  <p class="card-category">Data Siswa SMAN Srabaya</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th >No Induk</th>
                        <th >Nama Lengkap</th>
                        <th>Nama panggilan</th>
                        <th >Tempat lahir</th>
                        <th width="15%">tgl lahir</th>
                        <th>Jenis_kelamin</th>
                        <th width="10%">Kelas</th>
                        <th>agama</th>
                        <th >alamat</th>
                        <th>nama ortu</th>
                        <th width="18%">Aksi</th>
                      </thead>
                      <tbody>
                      <?php $no=1 ?>
                      @foreach($data_siswa as $siswa)
                    <tr class="pengguna">
                        <td class="px-6 py-3 leading-6 text-center whitespace-nowrap">{{ ++$i }}</td>
                        <td>{{$siswa->no_induk}}</td>
                        <td>{{$siswa->nama_lengkap}}</td>
                        <td>{{$siswa->nama_panggilan}}</td>
                        <td>{{$siswa->tempat_lahir}}</td>
                        <td>{{$siswa->tgl_lahir}}</td>
                        <td>{{$siswa->jenis_kelamin}}</td>
                        <td>{{$siswa->kelas->nama_kelas}}</td>
                        <td>{{$siswa->agama}}</td>
                        <td>{{$siswa->alamat}}</td>
                        <td>{{$siswa->nama_ortu}}</td>
                        <td>
                            <a href="/Admin/{{$siswa->id}}/editsiswa" class="button " ><i class="fa fa-edit"></i></a>
                            <a href="/Admin/{{$siswa->id}}/hapussiswa" class="button " onclick="return confirm('Apakah anda yakin untuk menghapus data {{$siswa->nama_lengkap}}')"><i class="fa fa-trash"></i></a>
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
        {{$data_siswa->links()}}
    </div>
</div>

<!-- modal untuk tambah data siswa-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:535px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            </div>
            <div class="modal-body">
                <form action="/Admin/buatakun" method="POST" >
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="no_induk" class="form-label">No Induk</label>
                        <input type="text" class="form-control" id="no_induk" name="no_induk">
                    </div>
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="nama_panggilan" class="form-label">Nama panggilan</label>
                        <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-control" aria-label="Default select example" name="kelas_id">
                            @foreach($data_kelas as $kls)
                                    <option value="{{$kls->id}}">{{$kls->nama_kelas}}</option>
                            @endforeach
                         </select> 
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
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
                        <label for="agama" class="form-label">agama</label>
                        <input type="text" class="form-control" id="agama" name="agama">
                    </div>
                    <div class="mb-3">
                        <label for="nama_ortu" class="form-label">Orang tua</label>
                        <input type="text" class="form-control" id="nama_ortu" name="nama_ortu">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir dari modal tambah data siswa -->

</div>
@endsection