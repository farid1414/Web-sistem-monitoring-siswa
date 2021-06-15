@extends('layout.templateuser')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','TUGAS SISWA')
@section('content')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/iconsiswa.png">
<link href="https://fonts.googleapis.com/css2?family=Orelega+One&family=Roboto:wght@300&display=swap" rel="stylesheet">

<div class="container">
    @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
            </div>
        @endif
    <h1>Tugas {{$data_kelas->nama_kelas}}</h1> <br>
    @foreach($data_kelas->guru as $kelas)
        <div class="card w-75" style="margin-top:8px; margin-bottom:35px;">
                <div class="card ">
                <div class="card-header" style="font-size:20px; font-family: 'Orelega One', cursive;">
                    {{$kelas->pivot->mapel}}
                <p style="float:right; font-size:16px; font-family: 'Roboto', sans-serif;">{{$kelas->pivot->poin}} poin</p>
                </div>
                <div class="card-body " >
                    <p style="margin-top:-2%; font-size:15px;" class="text-muted">Nama Guru: {{$kelas->nama_tendik}}</p>
                    <h5 class="card-title" style="color:rgb(184, 134, 11);"> 
                    <tr>
                        <td>{{$kelas->pivot->catatan_tugas}}</td> <br><br>
                    </tr>
                    </h5>
                    <a href="/storage/{{$kelas->pivot->tugas}}" class="btn btn-sm btn-primary">Detail Tugas</a>
                </div>
                <div class="card-footer text-muted">
                    Batas Pengumpulan : {{$kelas->pivot->batas}} {{$kelas->pivot->waktu}}
                    <div style="float:right">
                        <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Upload</a>
                    </div>
                </div>
                </div>
        </div>    
    @endforeach
</div>        


<!-- modal untuk upload tugas kepada siswa -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:535px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Tugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/Siswa/{{$data_kelas->id}}/addtugas" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="mb-3">  
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{auth()->user()->name}}" readonly>
                    </div>  
                    <div class="mb-3">
                        <label for="nilai" class="form-label">Kelas</label>
                        <select class="form-select" aria-label="Default select example" name="kelas_id">
                            @foreach($dt_kelas as $kls)
                                    <option value="{{$kls->id}}">{{$kls->nama_kelas}}</option>
                            @endforeach
                         </select> 
                    </div>
                    <div class="mb-3">
                        <label for="nilai" class="form-label">Mata Pelajaran</label>
                        <select class="form-select" aria-label="Default select example" name="mapel">
                            @foreach($data_mapel as $mpl)
                                    <option value="{{$mpl->nama_mapel}}">{{$mpl->nama_mapel}}</option>
                            @endforeach
                         </select>
                    </div>
                    <div class="mb-3">
                        <label for="tugas" class="form-label">Upload Tugas</label>
                        <input type="file" class="form-control" id="tugas" name="tugas" required>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Upload</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir modal -->

@endsection