@extends('layout.templateuser')
@extends('layout.navbardashboard')

@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet"/>
@stop

<!-- untuk mengirimkan title ke template -->
@section('tittle','VIEW SISWA')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/iconguru.png">
<link rel="stylesheet" href="/css/view.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,700&family=Noto+Serif:ital,wght@1,700&display=swap" rel="stylesheet">
@section('content')

    <div class="tabel">

        <!-- Tabel view Siswa -->
            <table class="table2" cellpadding="150" style="width:58%;">
                    <thead>
                        <tr style="background-color:rgb(65, 105, 225,0.6);" class="tabel1">
                            <th >Kode Mapel</th>
                            <th>Mata Pelajaran</th>
                            <th width="8%">Nilai Tugas</th>
                            <th width="8%">Nilai Uts</th>
                            <th width="8%">Nilai Uas</th>
                            <th width="">Total</th>
                            <th width="">Rata Rata</th>
                            <th width="">Aksi</th>
                    </thead>
                    <tbody>
                        @foreach($data_kelas as $kelas)
                        <tr class="pengguna">
                            <td>{{}}</td>
                            <td></td>
                            <td>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data ')"><i class="fa fa-trash"></i></a>
                            </td>
                        @endforeach
                        </tr>
                    </tbody>
            </table>
    </div>
                <!-- akhr tabel -->

        
     

<br><br><br><br><br><br><br><br><br>

@stop