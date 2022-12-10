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
              <li class="breadcrumb-item"><a href="{{route('matakuliah')}}">Mata Kuliah</a></li>
              <li class="breadcrumb-item active">Edit Mata Kuliah</li>
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
            <h4>Edit Mata Kuliah</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update_matakuliah', $upmk->id)}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="kode_mk">Kode Mata Kuliah</label>
                    <input type="text" name="kode_mk" id="kode_mk" class="form-control" value="{{$upmk->kode_mk}}">
                </div>
                <div class="form-group">
                    <label for="nama_mk">Nama Mata Kuliah</label>
                    <input type="text" name="nama_mk" id="nama_mk" class="form-control" value="{{$upmk->nama_mk}}">
                </div>
                <div class="form-group">
                    <label for="sks">Satuan Kredit Smt</label>
                    <input type="text" name="sks" id="sks" class="form-control" value="{{$upmk->sks}}">
                </div>
                <div class="form-group">
                    <label for="prodi_m">Prodi Mahasiswa</label>
                    <input type="text" name="prodi_m" id="prodi_m" class="form-control" value="{{$upmk->prodi_m}}">
                </div>
                <div class="form-group">
                    <label for="ruang">Ruang</label>
                    <input type="text" name="ruang" id="ruang" class="form-control" value="{{$upmk->ruang}}">
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" id="kelas" class="form-control" value="{{$upmk->kelas}}">
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
