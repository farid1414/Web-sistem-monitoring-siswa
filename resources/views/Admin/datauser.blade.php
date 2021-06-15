<!-- untuk memanggil template header dan footer  -->
@extends('layout.template')
<!-- untuk ambul template navbar -->
@extends('layout.Navbaradmin')


<!-- untuk mengirimkan title ke template -->
@section('tittle','DATA USER EMAIL')
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
                    <a class="navbar-brand">DATA USER EMAIL</a>
                </div>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                    <div class="input-group no-border">
                        <form method="get" action="{{url()->current()}}">
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

            <!-- alert sukes data ditambah -->
            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <!-- akhir alert -->
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">DATA User</h4>
                  <p class="card-category">Daftar User dan Email pengguna Website</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th scope="col">No</th>
                        <th scope="col" cellpadding="170">Nama</th>
                        <th scope="col" cellpadding="170">Email</th>
                        <th scope="col" cellpadding="170">Level</th>
                        <th scope="col" cellpadding="170">Id User</th>
                        <th scope="col" cellpadding="170">Aksi</th>
                      </thead>
                      <tbody>
                      <?php $no=1 ?>
                      @foreach($data_user as $user)
                    <tr>
                        <td class="px-6 py-3 leading-6 text-center whitespace-nowrap">{{ ++$i }}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->level}}</td>
                        <td>{{$user->id}}</td>
                        <td>
                            <a href="" class="button" onclick="return confirm('Apakah anda yakin untuk menghapus')"><i class="fa fa-trash"></i></a>
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
        {{$data_user->links()}}
    </div>
</div>

@endsection