
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Beranda</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('logout')}}">Logout</a></li>
              <li class="breadcrumb-item active">Beranda</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
      <div class="card card-info card-outline">
          <div class="card-body" >
            {{-- <h5 class="mb-2 mt-4">Dashboard</h5> --}}
            <div class="row">
              @if (auth()->user()->level == "admin") <!-- Jika level = Admin maka card menu akan ditampilkan hingga endif -->
              <div class="col-lg-4 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h4>User Account</h4>
                      <p>User Terdaftar</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-user-check"></i>
                    </div>
                    <a href="{{url('data_user')}}" class="small-box-footer">
                      Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <!-- small card -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Data Dosen</h4>
                      <p>Dosen Terdata</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-users" ></i> 
                    </div>
                    <a href="{{url('data_dosen')}}" class="small-box-footer">
                      Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <!-- small card -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h4>Data Mahasiswa</h4>
                      <p>Mahasiswa Terdata</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-users"></i>
                    </div>
                    <a href="{{url('data_mahasiswa')}}" class="small-box-footer">
                      Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                @endif <!-- Endif, Akhir penampilan card menu pada level admin -->
                @if (auth()->user()->level != "mahasiswa") <!-- Jika level = Dosen atau Admin maka card menu akan ditampilkan hingga endif -->
                <div class="col-lg-4 col-6">
                  <!-- small card -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h4>Mata Kuliah</h4>      
                      <p>Mata Kuliah Tersedia</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-book"></i>
                      {{-- <i class="fas fa-users" ></i>  --}}
                    </div>
                    <a href="{{url('matakuliah')}}" class="small-box-footer">
                      Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <!-- small card -->
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h4>Nilai</h4>     
                      <p>Nilai Mahasiswa</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-star" ></i> 
                    </div>
                    <a href="{{url('nilai')}}" class="small-box-footer">
                      Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <!-- small card -->
                  <div class="small-box bg-light">
                    <div class="inner">
                      <h4>Jadwal</h4>     
                      <p>Jadwal Perkuliahan</p>
                    </div>
                    <div class="icon">
                      <i class="far fa-calendar-alt"></i>
                    </div>
                    <a href="{{url('jadwal')}}" class="small-box-footer">
                      Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                @endif <!-- Endif, Akhir penampilan card menu pada level Dosen atau Admin -->
                @if (auth()->user()->level == "mahasiswa") <!-- Jika level = Mahasiswa maka card menu akan ditampilkan hingga endif -->
                <div class="col-lg-4 col-6">
                  <!-- small card -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h4>Mata Kuliah</h4>      
                      <p>Mata Kuliah Tersedia</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-book"></i>
                      {{-- <i class="fas fa-users" ></i>  --}}
                    </div>
                    <a href="{{url('matakuliah_m')}}" class="small-box-footer">
                      Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <!-- small card -->
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h4>Nilai</h4>     
                      <p>Nilai Mahasiswa</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-star" ></i> 
                    </div>
                    <a href="{{url('nilai_m')}}" class="small-box-footer">
                      Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <!-- small card -->
                  <div class="small-box bg-light">
                    <div class="inner">
                      <h4>Jadwal</h4>     
                      <p>Jadwal Perkuliahan</p>
                    </div>
                    <div class="icon">
                      <i class="far fa-calendar-alt"></i>
                    </div>
                    <a href="{{url('jadwal_m')}}" class="small-box-footer">
                      Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                @endif <!-- Endif, Akhir penampilan card menu pada level Mahasiswa -->
            </div>
          </div>      
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
    @include('template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('template.script')
@include('sweetalert::alert')
</body>
</html>
