<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAPORT SISWA</title>
    <link rel="stylesheet" href="/css/raaport.css">
    <link rel="stylesheet" href="/css/tabelraport.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Pangolin&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="btn">
            <a href="/dashboard" class="button">Keluar</a>
        </div>
        <div class="judul">
            <p style="font-size:160%;font-family: 'Oswald', sans-serif;">PEMERINTAH KOTA SURABAYA</p>
            <p  style="margin-top:-1.5%; font-size:18px;font-family: 'Oswald', sans-serif;">DINAS PENDIDIKAN</p>
            <p style="font-size:200%;font-family: 'Pangolin', cursive; font-weight:bold; margin-top:-1%;">SEKOLAH MENENGAH ATAS 1 SURABAYA</p>
            <p style="margin-top:-2.5%"> Jl Ketintang No 14 Surabaya Telp:08189076541</p>
        </div>
            <div class="logo">
                <img src="/gambar/wuri.png" width="10%" alt="">
            </div>
    </div>
    <div class="form-border1"></div>
    <div class="form-border"></div>
            <div class="text">
                <p>Laporan Hasil Belajar</p>
            </div>
    <div class="container">
        <div class="data">
            <form action="">
                <fieldset>
                <p>
                <label>Nama</label>
                <input type="text" value=":{{$data_siswa->nama_lengkap}}">
                </p>
                <p style="margin-top:-2%">
                    <label>Kelas</label>
                    <input type="text" value=":{{$data_siswa->kelas->nama_kelas}}">
                </p>
                <p style="margin-top:-2%">
                    <label>Semester</label>
                    <input type="text" value=":I">
                </p>    
                </fieldset>
            </form>
        </div>
    </div>
    
            <table class="table" >
                    <thead>
                        <tr style="background-color:rgb(65, 105, 225,0.6);">
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th width="8%">Nilai Tugas</th>
                            <th width="8%">Nilai Uts</th>
                            <th width="8%">Nilai Uas</th>
                            <th width="">Total</th>
                            <th width="">Rata Rata</th>
                    </thead>
                    <tbody>
                    <?php $no=1 ?>
                    @foreach($data_siswa->mapel as $mapel)
                        <tr class="pengguna">
                            <td>{{$no++}}</td>
                            <td>{{$mapel->nama_mapel}}</td>
                            <td>{{$mapel->pivot->nilai}}</td>
                            <td>{{$mapel->pivot->uts}}</td>
                            <td>{{$mapel->pivot->uas}}</td>
                            <td>{{($mapel->pivot->uts + $mapel->pivot->uas + $mapel->pivot->nilai)}}</td>
                            <td>{{($mapel->pivot->uts + $mapel->pivot->uas + $mapel->pivot->nilai)/3}}</td>
                        </tr>
                    @endforeach
                    </tbody>
            </table>
</body>
</html>