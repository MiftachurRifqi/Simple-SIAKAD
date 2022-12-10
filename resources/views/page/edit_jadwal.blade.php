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
              <li class="breadcrumb-item"><a href="#">Jadwal</a></li>
              <li class="breadcrumb-item active">Edit Jadwal</li>
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
            <h4>Edit Jadwal</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update_jadwal', $upjdwl->id)}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="matakuliah">Mata Kuliah</label>
                    <input type="text" name="matakuliah" id="matakuliah" class="form-control" value="{{$upjdwl->matakuliah}}">
                </div>
                <div class="form-group">
                  <label for="dosen">Dosen</label>
                    <input type="text" name="dosen" id="dosen" class="form-control" value="{{$upjdwl->dosen}}">
                </div>
                <div class="form-group">
                  <label for="ruangan">Ruangan</label>
                    <input type="text" name="ruangan" id="ruangan" class="form-control" value="{{$upjdwl->ruangan}}">
                </div>
                <div class="form-group">
                  <label for="waktu">Waktu</label>
                    <input type="text" name="waktu" id="waktu" class="form-control" value="{{$upjdwl->waktu}}">
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
