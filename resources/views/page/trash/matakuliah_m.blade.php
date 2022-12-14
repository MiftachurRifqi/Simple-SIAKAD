
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
            <h1 class="m-0">Mata Kuliah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mata Kuliah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header"> 
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                  <th>No</th>
                  <th>Kode MK</th>
                  <th>Nama MK</th>
                  <th>SKS</th>
                  <th>Prodi</th>
                  <th>Ruang</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($dtmk_m as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->kode_mk}}</td>
                  <td>{{$item->nama_mk}}</td>
                  <td>{{$item->sks}}</td>
                  <td>{{$item->prodi_m}}</td>
                  <td>{{$item->ruang}}</td>
                  <td>{{$item->kelas}}</td>
                  <td>
                    <a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fa-regular fas fa-trash-alt" style="color:red"></i></a>
                  </td>
                </tr>

                @endforeach
            </table>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
</body>
</html>
