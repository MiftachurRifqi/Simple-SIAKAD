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
            {{-- <h1 class="m-0">Tambah Data Mahasiswa</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('data_mahasiswa')}}">Data Mhs</a></li>
              <li class="breadcrumb-item active">Tambah Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      
      <div class="card card-info card-outline">
        <div class="card-header">
            <h4>Tambah Data Mahasiswa</h4>
        </div>
        <div class="card-body">
            <form action="{{route('save_mahasiswa')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="nim_mhs">NIM Mahasiswa</label>
                    <input type="text" name="nim_mhs" id="nim_mhs" class="form-control" placeholder="NIM Mahasiswa" autofocus>
                </div>
                <div class="form-group">
                  <label for="nama_mhs">Nama Mahasiswa</label>
                    <input type="text" name="nama_mhs" id="nama_mhs" class="form-control" placeholder="Nama Mahasiswa">
                </div>
                <div class="form-group">
                  <label for="fakultas_mhs">Fakultas Mahasiswa</label>
                    <input type="text" name="fakultas_mhs" id="fakultas_mhs" class="form-control" placeholder="Fakultas Mahasiswa">
                </div>
                <div class="form-group">
                  <label for="prodi_mhs">Prodi Mahasiswa</label>
                    <input type="text" name="prodi_mhs" id="prodi_mhs" class="form-control" placeholder="Prodi Mahasiswa">
                </div>
                <div class="form-group">
                  <label for="alamat_mhs">Alamat Mahasiswa</label>
                    <textarea name="alamat_mhs" id="alamat_mhs" class="form-control" placeholder="Alamat Mahasiswa"></textarea>
                </div>
                <div class="form-group">
                  <label for="email_mhs">Email Mahasiswa</label>
                    <input type="text" name="email_mhs" id="email_mhs" class="form-control" placeholder="Email Mahasiswa">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>

            </form>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
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
</body>
</html>
