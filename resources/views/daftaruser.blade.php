<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->



<!-- untuk mengirimkan title ke template -->
@section('tittle','BANTUAN')
<!-- untuk mengirimkan isi conten ke template -->
@section('content')

<!-- Css untuk menu pencarian -->
<link rel="stylesheet" href="/css/cari.css">

<div class="wrapper ">
    <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand">BANTUAN</a>
                </div>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                    <div class="input-group no-border">
                        <form method="get" action="{{url()->current() }}">
                            <input class="search" type="search" name="keyword" placeholder="Search..." aria-label="Search">
                            <button class="button" type="submit">Cari</button>
                        </form>
                    </div>
                    </form>
                    <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/" >
                        <i class="fa fa-home"></i>
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
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">DATA USER</h4>
                  <p class="card-category">Data Email Siswa Guru dan Orang Tua di SMAN Srabaya</p>
                  <p class="card-category">* Kosong sebagai user orang tua</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th scope="col" style="text-align:center">No</th>
                        <th scope="col" style="text-align:center">Nama</th>
                        <th scope="col" style="text-align:center">Sebagai</th>
                        <th scope="col" style="text-align:center">Email</th>
                      </thead>
                      <tbody>
                      <?php $no=1 ?>
                      @foreach($data_user as $user)
                    <tr >
                        <td class="px-6 py-3 leading-6 text-center whitespace-nowrap">{{ ++$i }}</td>  
                        <td>{{$user->name}}</td>
                        <td>{{$user->level}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
        {{$data_user->links()}}
    </div>
</div>

@endsection