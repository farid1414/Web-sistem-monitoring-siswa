<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','JADWAL GURU MENGAJAR')
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
                    <a class="navbar-brand">JADWAL GURU MENGAJAR</a>
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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top:10px;">
                    Tambah Jadwal
                </button>  
                @if(session('hapus'))
                <div class="alert alert-danger" role="alert">
                    {{session('hapus')}}
                </div>
                @endif
                @if(session('sukses'))
                <div class="alert alert-primary" role="alert">
                    {{session('sukses')}}
                </div>
                @endif
            <!-- akhir tombol tambah -->
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">JADWAL GURU MENGAJAR</h4>
                  <p class="card-category">{{$data_guru->nama_tendik}}</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                    <th>No</th>
                    <th>Kode Mapel</th>
                    <th>Mata Pelajaran</th>
                    <th>Hari</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                      </thead>
                      <tbody>
                      <?php $no=1 ?>
                      @foreach($data_guru->mapel as $mapel)
                                <tr class="pengguna">
                                    <td>{{$no++}}</td>
                                    <td>{{$mapel->kode_mapel}}</td>
                                    <td>{{$mapel->nama_mapel}}</td>
                                    <td>{{$mapel->pivot->hari}}</td>
                                    <td>{{$mapel->pivot->jam_mulai}}</td>
                                    <td>{{$mapel->pivot->jam_selesai}}</td>
                                    <td>{{$mapel->pivot->kelas}}</td>
                                    <td >
                                    <a href="/Admin/{{$data_guru->id}}/{{$mapel->id}}/hapusjadwalguru" class="button " onclick="return confirm('Apakah anda yakin untuk menghapus data ')">Hapus Jadwal</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Guru Mengajar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/Admin/{{$data_guru->id}}/addjadwalguru" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="nilai" class="form-label">Mapel</label>
                        <select class="form-control" aria-label="Default select example" name="mapel">
                            @foreach($data_mapel as $data)
                                    <option value="{{$data->id}}">{{$data->nama_mapel}}</option>
                            @endforeach
                         </select>
                    </div>
                    <div class="mb-3">
                        <label for="nilai" class="form-label">Kelas</label>
                        <select class="form-control" aria-label="Default select example" name="kelas">
                            @foreach($kelas as $kelas)
                                    <option value="{{$kelas->nama_kelas}}">{{$kelas->nama_kelas}}</option>
                            @endforeach    
                         </select>
                    </div>
                    <div class="mb-3">
                        <label for="hari" class="form-label">Hari</label>
                        <input type="text" class="form-control" id="hari" name="hari">
                    </div>
                    <div class="mb-3">
                        <label for="jam_mulai" class="form-label">Jam Mulai</label>
                        <input type="time" class="form-control" id="jam_mulai" name="jam_mulai">
                    </div>
                    <div class="mb-3">
                        <label for="jam_selesai" class="form-label">Jam Selesai</label>
                        <input type="time" class="form-control" id="jam_selesai" name="jam_selesai">
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


@endsection