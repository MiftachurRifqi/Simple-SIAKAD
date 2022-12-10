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
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('data_dosen')}}">Data Dosen</a></li>
              <li class="breadcrumb-item active">Tambah Dosen</li>
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
            <h4>Tambah Data Dosen</h4>
        </div>
        <div class="card-body">
            <form action="{{route('save_dosen')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="nip_dsn">NIP Dosen</label>
                    <input type="text" name="nip_dsn" id="nip_dsn" class="form-control" placeholder="NIP Dosen" autofocus>
                </div>
                <div class="form-group">
                  <label for="nama_dsn">Nama Dosen</label>
                    <input type="text" name="nama_dsn" id="nama_dsn" class="form-control" placeholder="Nama Dosen">
                </div>
                <div class="form-group">
                  <label for="alamat_dsn">Alamat Dosen</label>
                    <textarea name="alamat_dsn" id="alamat_dsn" class="form-control" placeholder="Alamat Dosen"></textarea>
                </div>
                <div class="form-group">
                  <label for="email_dsn">Email Dosen</label>
                    <input type="text" name="email_dsn" id="email_dsn" class="form-control" placeholder="Email Dosen">
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
