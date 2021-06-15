<div class="sidebar" data-color="purple" data-background-color="white" data-image="/assets/img/sidebar-1.jpg">
      <div class="logo"><a href="/home" class="simple-text logo-normal">
          {{auth()->user()->name}}
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="/Admin/Homeadmin">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/Admin/dataguru">
              <i class="fa fa-database"></i>
              <p>Data Guru</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/Admin/datasiswa">
              <i class="fa fa-database"></i>
              <p>Data Siswa</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/Admin/datakelas">
              <i class="fa fa-university"></i>
              <p>Data Kelas</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/Admin/datajadwalguru">
              <i class="fa fa-calendar"></i>
              <p>Jadwal Guru</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/Admin/datauser">
              <i class="fa fa-database"></i>
              <p>Data User</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/Admin/datarating">
              <i class="fa fa-bar-chart"></i>
              <p>Rating Website</p>
            </a>
          </li>
        </ul>
      </div>
    </div>