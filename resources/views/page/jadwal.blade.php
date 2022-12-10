
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
            <h1 class="m-0">Jadwal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
              <li class="breadcrumb-item active">Jadwal</li>
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
            <a href="{{route('cetak_jadwal')}}" target="_blank" class="btn btn-info">Cetak Data <i class="fas fa-print"></i> </a>
            <a href="{{route('create_jadwal')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i> </a>
          </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                  <th>No</th>
                  <th>Mata Kuliah</th>
                  <th>Dosen</th>
                  <th>Ruangan</th>
                  <th>Waktu</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($dtjdwl as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->matakuliah}}</td>
                  <td>{{$item->dosen}}</td>
                  <td>{{$item->ruangan}}</td>
                  <td>{{$item->waktu}}</td>
                  <td>
                    <a href="{{route('edit_jadwal',$item->id)}}"><i class="fas fa-edit"></i></a> 
                    | <a href="#" class="delete"><i class="fa-regular fas fa-trash-alt" style="color:red"></i></a>
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
@include('sweetalert::alert')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
<script>
  $('.delete').click(function(){
    swal({
      title: "Yakin?",
      text: "Anda akan menghapus data ini!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "{{route ('delete_jadwal',$item->id)}}"
          swal("Data Berhasil Dihapus!", {
            icon: "success",
          });
        } else {
          swal("Data Tidak Jadi Dihapus!");
        }
      });

  });
</script>
</html>
