@extends('layout.templateuser')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','UPLOAD TUGAS SISWA')
@section('content')
<!-- untuk mengirim isi konten ke template -->

    <div class="container">
        @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <div class="text" style="text-align:center; font-size:25px; font-weight:bold">
            <p>Tugas untuk kelas  {{$data_kelas->nama_kelas}}</p>
        </div>
        <!-- Tombol tambah data  -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top:10px;">
            Upload Tugas
            </button>
        <!-- akhir tombol tambah -->

            <!-- Tabel view Siswa -->
            <table style="background-color:white; margin-top:10px; " cellpadding="10">
                    <thead>
                        <tr style="background-color:rgb(65, 105, 225,0.6); font-size:16px;" class="tabel1">
                            <th width="3%">No</th>
                            <th width="20%">Nama Guru</th>
                            <th width="18">Mata Pelajaran</th>
                            <th width="30%">Tugas</th>
                            <th width="">Batas pengumpulan</th>
                            <th width="">Jam</th>
                            <th width="">Detail tugas</th>
                            <th width="">Poin</th>
                            <th width="">Aksi</th>
                        </tr>
                    </thead>
                    <?php $no =1?>
                    <tbody >
                        @foreach($data_kelas->guru as $kl)
                        <tr class="pengguna">
                            <td>{{$no ++}}</td>
                            <td>{{$kl->nama_tendik}}</td>
                            <td>{{$kl->pivot->mapel}}</td>
                            <td>{{$kl->pivot->catatan_tugas}}</td>
                            <td>{{$kl->pivot->batas}}</td>
                            <td>{{$kl->pivot->waktu}}</td>
                            <td><a href="/storage/{{$kl->pivot->tugas}}" class="btn btn-sm btn-primary" style="margin-top:5px;">Detail tugas</a></td>
                            <td>{{$kl->pivot->poin}}</td>
                            <td>
                                <a href="/Guru/{{$data_kelas->id}}/{{$kl->id}}/tugasselesai" class=="btn  btn-success" onclick="return confirm('Apakah anda yakin menandai tugas telah selesai ')"><i class="fa fa-check-square"></i></a>
                            </td>
                        @endforeach
                        </tr>
                    </tbody>
            </table>
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
                <form action="/Guru/{{$data_kelas->id}}/addtugas" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="mb-3">
                        <label for="nilai" class="form-label">Guru</label>
                        <select class="form-select" aria-label="Default select example" name="guru">
                            @foreach($guru as $guru)
                                    <option value="{{$guru->id}}">{{$guru->nama_tendik}}</option>
                            @endforeach
                         </select>
                    </div>
                    <div class="mb-3">
                        <label for="nilai" class="form-label">Mata Pelajaran</label>
                        <select class="form-select" aria-label="Default select example" name="mapel">
                            @foreach($data_kelas->mapel as $mpl)
                                    <option value="{{$mpl->nama_mapel}}">{{$mpl->nama_mapel}}</option>
                            @endforeach
                         </select>
                    </div>
                    <div class="mb-3">  
                        <label for="catatan_tugas" class="form-label">catatan_tugas</label>
                        <textarea class="form-control" id="catatan_tugas" name="catatan_tugas"> </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tugas" class="form-label">Upload Tugas</label>
                        <input type="file" class="form-control" id="tugas" name="tugas" required>
                    </div>
                    <div class="mb-3">
                        <label for="batas" class="form-label">Batas Pengumpulan</label>
                        <input type="date" class="form-control" id="batas" name="batas">
                    </div>
                    <div class="mb-3">
                        <label for="waktu" class="form-label">waktu Pengumpulan</label>
                        <input type="time" class="form-control" id="waktu" name="waktu">
                    </div>
                    <div class="mb-3">
                        <label for="poin" class="form-label">Poin Penilaian<label>
                        <input type="number" class="form-control" id="poin" name="poin">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir modal -->
@endsection