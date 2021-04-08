@extends('layout.template')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','VIEW SISWA')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/iconguru.png">
<link rel="stylesheet" href="/css/view.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,700&family=Noto+Serif:ital,wght@1,700&display=swap" rel="stylesheet">
@section('content')

<div class="container">
     <!-- Tombol tambah data  -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top:10px;">
                Tambah nilai
            </button>  
      <!-- akhir tombol tambah -->

    <div class="judul">
        <form action="" class="form1">
            <fieldset>
            <div class="judulatas">
                <p>Data Diri Siswa</p>
            </div>
            <p>
            <label>Nama</label>
            <input type="text" value=":{{$data_siswa->nama_lengkap}}" readonly>
            </p>
            <p>
            <label>No Induk</label>
            <input type="text" value=":{{$data_siswa->no_induk}}" readonly>
            </p>
            <label>Kelas</label>
            <input type="text" value=":{{$data_siswa->kelas}}" readonly>
            </p>
            </fieldset>
        </form> 
    </div> 
</div>

    <div class="tabel">

        <!-- Tabel tenaga pendidikan -->
            <table class="table2" cellpadding="10" style="width:50%;">
                    <thead>
                        <tr style="background-color:rgb(65, 105, 225,0.6);" class="tabel1">
                            <th >Mata Pelajaran</th>
                            <th width="50px">Nilai Tugas</th>
                            <th width="10px">Nilai Uts</th>
                            <th width="10px">Nilai Uas</th>
                            <th width="10px">Edit nilai</th>

                    </thead>
                    <tbody>
                        @foreach($data_siswa->mapel as $nl)
                        <tr class="pengguna">
                            <td>{{$nl->nama_mapel}}</td>
                            <td>{{$nl->pivot->nilai}}</td>
                            <td>{{$nl->pivot->uts}}</td>
                            <td>{{$nl->pivot->uas}}</td>
                            <td>
                            <a href="/Admin/editsiswa" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
    </div>
                <!-- akhr tabel -->

        
     

<br><br><br><br><br><br><br><br><br>



<!-- modal untuk tambah data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:535px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/Guru/{{$data_siswa->id}}/addnilai" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="nilai" class="form-label">Nilai</label>
                        <select class="form-select" aria-label="Default select example" name="mapel">
                                @foreach($mapel as $mapel)
                                    <option value="{{$mapel->id}}">{{$mapel->nama_mapel}}</option>
                                @endforeach
                         </select>
                    </div>

                    <div class="mb-3">
                        <label for="nilai" class="form-label">Nilai</label>
                        <input type="number" class="form-control" id="nilai" name="nilai">
                    </div>
                    
                    <div class="mb-3">
                        <label for="uts" class="form-label">Nilai Uts</label>
                        <input type="number" class="form-control" id="uts" name="uts">
                    </div>
                    <div class="mb-3">
                        <label for="uas" class="form-label">Nilai uas</label>
                        <input type="number" class="form-control" id="uas" name="uas">
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