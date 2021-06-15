@extends('layout.templateuser')
@extends('layout.navbardashboard')

<!-- untuk mengirimkan title ke template -->
@section('tittle','RATING US')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/.png">
<link rel="stylesheet" href="/css/rating.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
@section('content')
    <div class="testbox">
    <form action="/rating/kirim" method="POST">
    {{csrf_field()}}
      <div class="item">
        <p>Nama</p>
        <input type="text" name="nama" >
      </div>
      <div class="item">
        <p>Email<span class="required">*</span></p>
        <input type="email" name="email">
      </div>
      <h5>Rating Website</h5>
      <div class="question">
        <p>Keindahan:</p>
        <div class="question-answer">
          <input type="radio" value="Sangat Kurang" id="radio_1" name="keindahan">
          <label for="radio_1" class="radio"><span>Sangat Kurang</span></label>
          <input type="radio" value="Kurang Bagus" id="radio_2" name="keindahan" >
          <label for="radio_2" class="radio"><span>Kurang</span></label>
          <input type="radio" value="Bagus" id="radio_3" name="keindahan" >
          <label for="radio_3" class="radio"><span>Bagus</span></label>
          <input type="radio" value="Sangat Bagus" id="radio_4" name="keindahan" >
          <label for="radio_4" class="radio"><span>Sangat Bagus</span></label>
        </div>
      </div>

      <div class="question">
        <p>Ketepatan:</p>
        <div class="question-answer">
          <input type="radio" value="Sangat Kurang" id="radio_5" name="ketepatan" >
          <label for="radio_5" class="radio"><span>Sangat Kurang</span></label>
          <input type="radio" value="Kurang Tepat" id="radio_6" name="ketepatan" >
          <label for="radio_6" class="radio"><span>Kurang Tepat</span></label>
          <input type="radio" value="Bagus" id="radio_7" name="ketepatan" >
          <label for="radio_7" class="radio"><span>Bagus</span></label>
          <input type="radio" value="Sangat Bagus" id="radio_8" name="ketepatan" >
          <label for="radio_8" class="radio"><span>Sangat Tepat</span></label>
        </div>
      </div>  
      
      <div class="question">
        <p>Kegunaan:</p>
        <div class="question-answer">
          <input type="radio" value="Kurang Berguna" id="radio_9" name="kegunaan" >
          <label for="radio_9" class="radio"><span>Kurang Berguna</span></label>
          <input type="radio" value="Berguna" id="radio_10" name="kegunaan" >
          <label for="radio_10" class="radio"><span>Berguna</span></label>
          <input type="radio" value="Sangat Berguna" id="radio_11" name="kegunaan" >
          <label for="radio_11" class="radio"><span>Sangat Berguna</span></label>
        </div>
      </div>  

      <h5>Saran</h5>
      <div class="question">
        <p>Saran untuk pengembangan web:</p>
        <small>Ceklist untuk saran pengembangan web:</small>
        <div class="question-answer checkbox-item">
          <div>
            <input type="checkbox" value="Menambah Fitur baru" id="check_1" name="saran" checked ="checked" >
            <label for="check_1" class="check"><span>Tambah Fitur</span></label>
          </div>
          <div>
            <input type="checkbox" value="Mengubah Desain" id="check_2" name="saran" checked ="checked" >
            <label for="check_2" class="check"><span>Ubah Desain</span></label>
          </div>
          <div>
            <input type="checkbox" value="Mempermudah Akses" id="check_3" name="saran" checked ="checked" >
            <label for="check_3" class="check"><span>Kemudahan Akases</span></label>
          </div>
          <div>
            <input type="checkbox" value="Ketepatan Pengguna" id="check_4" name="saran" checked ="checked" >
            <label for="check_4" class="check"><span>Ketepatan pengguna</span></label>
          </div>
        <br />
        <div class="item">
          <p>Kritik dan Saran<span class="required">*</span></p>
          <textarea rows="3" name="kritik"></textarea>
        </div>
        <div class="btn-block">
          <button type="submit">Kirim</button>
        </div>
    </form>
    </div>
@endsection