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
              <li class="breadcrumb-item"><a href="{{route('nilai')}}">Nilai</a></li>
              <li class="breadcrumb-item active">Edit Nilai</li>
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
            <h4>Edit Data Nilai</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update_nilai', $upnl->id)}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama_mahs">Nama Mahasiswa</label>
                    <input type="text" name="nama_mahs" id="nama_mahs" class="form-control" value="{{$upnl->nama_mahs}}">
                </div>
                <div class="form-group">
                    <label for="nim_mahs">NIM Mahasiswa</label>
                    <input type="text" name="nim_mahs" id="nim_mahs" class="form-control" value="{{$upnl->nim_mahs}}">
                </div>
                <div class="form-group">
                    <label for="prodi_mahs">Prodi Mahasiswa</label>
                    <input type="text" name="prodi_mahs" id="prodi_mahs" class="form-control" value="{{$upnl->prodi_mahs}}">
                </div>
                <div class="form-group">
                    <label for="nilai_tugas">Nilai Tugas</label>
                    <input type="text" name="nilai_tugas" id="nilai_tugas" class="form-control" value="{{$upnl->nilai_tugas}}">
                </div>
                <div class="form-group">
                    <label for="nilai_uts">Nilai UTS</label>
                    <input type="text" name="nilai_uts" id="nilai_uts" class="form-control" value="{{$upnl->nilai_uts}}">
                </div>
                <div class="form-group">
                    <label for="nilai_uas">Nilai UAS</label>
                    <input type="text" name="nilai_uas" id="nilai_uas" class="form-control" value="{{$upnl->nilai_uas}}">
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
