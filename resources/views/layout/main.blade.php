<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Retribusi PAD ADMIN | {{ $title }}</title>

        <!-- Google Font: Source Sans Pro -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        />
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="plugins/fontawesome-free/css/all.min.css"
        />
        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <!-- Ionicons -->
        <link
            rel="stylesheet"
            href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
        />
        <!-- Tempusdominus Bootstrap 4 -->
        <link
            rel="stylesheet"
            href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
        />
        <!-- iCheck -->
        <link
            rel="stylesheet"
            href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"
        />
        <!-- JQVMap -->
        <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css" />
        <!-- overlayScrollbars -->
        <link
            rel="stylesheet"
            href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
        />
        <!-- Daterange picker -->
        <link
            rel="stylesheet"
            href="plugins/daterangepicker/daterangepicker.css"
        />
        <!-- summernote -->
        <link
            rel="stylesheet"
            href="plugins/summernote/summernote-bs4.min.css"
        />
        {{-- custom css --}}
        <link
            rel="stylesheet"
            href="dist/css/custom.css"
        />
        @section('css')
            
        @show
    </head>
    
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Preloader -->
            <div
                class="
                    preloader
                    flex-column
                    justify-content-center
                    align-items-center
                "
            >
                <img
                    class="animation__shake"
                    src="dist/img/AdminLTELogo.png"
                    alt="AdminLTELogo"
                    height="60"
                    width="60"
                />
            </div>

            <!-- Navbar -->
            <nav
                class="
                    main-header
                    navbar navbar-expand navbar-white navbar-light
                "
            >
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            data-widget="pushmenu"
                            href="#"
                            role="button"
                            ><i class="fas fa-bars"></i
                        ></a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    {{-- fullscreen button --}}
                    <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="/" class="brand-link">
                    <img
                        src="dist/img/AdminLTELogo.png"
                        alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3"
                        style="opacity: 0.8"
                    />
                    <span class="brand-text font-weight-light">Retribusi PAD | ADMIN</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                        <img
                            src="dist/img/user2-160x160.jpg"
                            class="img-circle elevation-2"
                            alt="User Image"
                        />
                        </div>
                        <div class="info">
                        <a href="#" class="d-block">Nama Admin</a>
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul
                            class="nav nav-pills nav-sidebar flex-column"
                            data-widget="treeview"
                            role="menu"
                            data-accordion="false"
                        >
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="/" class="nav-link {{  ($title === "Dashboard") ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                                </a>
                            </li>
                            <li class="nav-header">Kelola User</li>
                                <li class="nav-item">
                                    <a href="/petugas" class="nav-link {{  ($title === "Petugas"| $title === "Detail Petugas" | $title === "Tambah Petugas"| $title === "Edit Petugas") ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>Petugas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/pemilik-usaha" class="nav-link {{  ($title === "Pemilik Usaha"| $title === "Detail Pemilik Usaha" | $title === "Tambah Pemilik Usaha"| $title === "Edit Pemilik Usaha") ? 'active' : '' }}">
                                    <i class="nav-icon far fa-user"></i>
                                    <p>Pemilik Usaha</p>
                                    </a>
                            </li>
                            <li class="nav-header">Master Data</li>
                                <li class="nav-item">
                                    <a href="/usaha" class="nav-link {{  ($title === "Usaha"| $title === "Detail Usaha" | $title === "Tambah Usaha"| $title === "Edit Usaha") ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-store"></i>
                                    <p>Usaha</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/iuran" class="nav-link {{  ($title === "Iuran"| $title === "Detail Iuran" | $title === "Tambah Iuran"| $title === "Edit Iuran") ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-money-bill"></i>
                                    <p>Iuran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/denda" class="nav-link {{  ($title === "Denda"|  $title === "Tambah Denda"| $title === "Edit Denda") ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-money-bill"></i>
                                    <p>Denda</p>
                                    </a>
                                </li>
                            </li>
                            <li class="nav-item">
                                <a href="/transaksi" class="nav-link {{  ($title === "Transaksi"|  $title === "Tambah Transaksi"| $title === "Edit Transaksi" | $title === "Detail Transaksi") ? 'active' : '' }}">
                                <i class="fas fa-money-check"></i>
                                <p>
                                    Transaksi
                                </p>
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-lg">
                                @yield('content')
                            </div>                          
                        </div>
                        <!-- /.row (main row) -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong
                    >Copyright &copy; 2021
                    <a href="/template">RETRIBUSI PAD</a>.</strong
                >
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 1.0.0
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
            $.widget.bridge("uibutton", $.ui.button);
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
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="plugins/jszip/jszip.min.js"></script>
        <script src="plugins/pdfmake/pdfmake.min.js"></script>
        <script src="plugins/pdfmake/vfs_fonts.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

        @section('js')
            
        @show
    </body>
</html>
