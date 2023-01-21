<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
   <!-- css -->
  <link href="../../assets/dist/css/adminlte.css" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="link_ig_smanega" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin BK SMANEGA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/dinar.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a >Dinar Permadi P, S.Pd</a>
          <br>
            <a>199302192022211016</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Beranda</p>
                </a>
            </ul>
          </li>
            
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="form1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form3" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form4" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form 4</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Akademik
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="peringkat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Peringkat</p>
                </a>
              </li> 
            <li class="nav-item">
                <a href="SIA" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data SIA</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="prestasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Prestasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="siswaDropOut" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data DO</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="SiswaBermasalah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Siswa Bermasalah</p>
                </a>
              </li> 
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Diri Siswa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="wali" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Wali Siswa</p>
                </a>
              </li> 
            <li class="nav-item">
                <a href="keluarga" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Orang Tua Siswa</p>
                </a>
              </li> 
            <li class="nav-item">
                <a href="admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Admin BK</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="siswa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Seluruh Siswa</p>
                </a>
              </li>             
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Siswa Kelas 10
                  <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                <a href="10IPA1" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>10 IPA 1</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="10IPA2" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>10 IPA 2</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="10IPA3" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>10 IPA 3</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="10IPA4" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>10 IPA 4</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="10IPA5" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>10 IPA 5</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="10IPS1" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>10 IPS 1</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="10IPS2" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>10 IPS 2</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="10IPS3" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>10 IPS 3</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="10IPS4" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>10 IPS 4</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="10IPS5" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>10 IPS 5</p>
                </a>
              </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Siswa Kelas 11
                  <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                <a href="11IPA1" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>11 IPA 1</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="11IPA2" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>11 IPA 2</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="11IPA3" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>11 IPA 3</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="11IPA4" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>11 IPA 4</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="11IPA5" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>11 IPA 5</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="11IPS1" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>11 IPS 1</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="11IPS2" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>11 IPS 2</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="11IPS3" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>11 IPS 3</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="11IPS4" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>11 IPS 4</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="11IPS5" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>11 IPS 5</p>
                </a>
              </ul>             
              <li class="nav-item">
                <a href="11IPS5" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Siswa Kelas 12
                  <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                <a href="12IPA1" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>12 IPA 1</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="12IPA2" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>12 IPA 2</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="12IPA3" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>12 IPA 3</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="12IPA4" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>12 IPA 4</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="12IPA5" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>12 IPA 5</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="12IPS1" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>12 IPS 1</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="12IPS2" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>12 IPS 2</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="12IPS3" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>12 IPS 3</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="12IPS4" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>12 IPS 4</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="12IPS5" class="nav-link">
                
                  <i class="far fa-circle nav-icon"></i>
                  <p>12 IPS 5</p>
                </a>
              </ul>
            </ul>
          </li>
          <li class="nav-header">History</li>
          <li class="nav-item">
            <a href="gallery" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="kegiatan" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Kegiatan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="projects" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="contact" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sosial Media</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pengumuman" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengumuman</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="profile" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Profile</p>
                  </a>
                </li>
                <li class="nav-item">
                  <li class="nav-item">
                    <a href="login" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Log out</p>
                    </a>
                  </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Seluruh Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Wali</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
  
<div class="row">
    <div class="col-12">
      <div class="container-fluid">
        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Cari data dengan nama atau NISN</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <div class="table-sm">
            <table id="example1" class="table table-bordered">
            <tr>        
                      <th >NISN</th>
                      <th >Absen</th> 
                      <th >JK</th>                   
                      <th >Nama</th>
                      <th >Kelas</th>
                      <th >TTL</th>
                      <th >Agama</th>                   
                      <th >Goldar</th>
                      <th >No KK</th>                                 
                      <th >Anak ke</th>                     
                      <th >No hp</th> 
                      <th >Email</th> 
                      <th >Alamat</th>        
                      <th style="width: 20px">ACTIONS</th> 
                    </tr>
                  

                    <tbody>
                          @foreach ($siswa as $key => $item)
                    <tr>
                      
                      <td>{{$item->nisn}}</td>
                      <td>{{$item->no_absen}}</td>
                      <td>{{$item->jk_siswa}}</td>
                      <td>{{$item->nama_siswa}}</td>
                      <td>{{$item->id_kelas}}</td>
                      <td>{{$item->tgl_lahir}}</td>
                      <td>{{$item->agama_siswa}}</td>                      
                      <td>{{$item->goldar_siswa}}</td>
                      <td>{{$item->no_kk}}</td>                    
                      <td>{{$item->anak_ke}}</td>
                      <td>{{$item->no_hp}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->alamat}}</td>
                      
                      <td> 
                        <a href ="{{ url('siswa/'.$item->nisn.'/edit') }}">
                      <button type="submit" class="badge bg-primary">EDIT</button></a>
                      
                        <form action="{{ url('siswa/'.$item->nisn) }}" method="POST">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="badge bg-danger" type="submit">HAPUS</button></input>
                        </form>
                      </td> 
                          @endforeach
                    </tr>
                  </tbody>
            </table>
          </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Bimbingan Konseling SMAN 1 GARUM </strong>

    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": true,
      "ordering": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print",]

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
</body>
</html>
