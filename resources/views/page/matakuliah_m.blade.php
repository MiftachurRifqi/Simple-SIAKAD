
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
              <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
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
          <div class="card-tools">
            <a href="{{route('create_matakuliah_m')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i> </a>
          </div>
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
                    <a href="#" class="delete" data-id="{{$item->id}}" data-nama="{{$item->nama_mk}}" data-kode="{{$item->kode_mk}}"><i class="fa-regular fas fa-trash-alt" style="color:red;"></i></a>
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
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
<script>
  $('.delete').click(function(){
    var mkid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    var kode = $(this).attr('data-kode');

    swal({
      title: "Yakin?",
      text: "Anda akan menghapus '"+kode+" | "+nama+"'!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/delete_matakuliah_m/"+mkid+""
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
