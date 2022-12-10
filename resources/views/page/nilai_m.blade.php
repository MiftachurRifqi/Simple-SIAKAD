
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
            <h1 class="m-0">Nilai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
              <li class="breadcrumb-item active">Nilai</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header"> 
          <div class="card-tools">
            <a href="{{route('cetak_nilai_m')}}" target="_blank" class="btn btn-info">Cetak Data <i class="fas fa-print"></i> </a>
          </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                  <th>No</th>
                  <th>Nama Mahasiswa</th>
                  <th>NIM Mahasiswa</th>
                  <th>Prodi Mahasiswa</th>
                  <th>Nilai Tugas</th>
                  <th>Nilai UTS</th>
                  <th>Nilai UAS</th>
                </tr>
                @foreach ($dtnl_m as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->nama_mahs}}</td>
                  <td>{{$item->nim_mahs}}</td>
                  <td>{{$item->prodi_mahs}}</td>
                  <td>{{$item->nilai_tugas}}</td>
                  <td>{{$item->nilai_uts}}</td>
                  <td>{{$item->nilai_uas}}</td>
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
@include('sweetalert::alert')
</body>
</html>
