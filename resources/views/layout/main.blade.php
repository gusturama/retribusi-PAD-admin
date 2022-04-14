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
            href="/plugins/fontawesome-free/css/all.min.css"
        />
        <!-- DataTables -->
        <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <!-- Ionicons -->
        <link
            rel="stylesheet"
            href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
        />
        <!-- Tempusdominus Bootstrap 4 -->
        <link
            rel="stylesheet"
            href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
        />
        <!-- iCheck -->
        <link
            rel="stylesheet"
            href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css"
        />
        <!-- JQVMap -->
        <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css" />
        <!-- Theme style -->
        <link rel="stylesheet" href="/dist/css/adminlte.min.css" />
        <!-- overlayScrollbars -->
        <link
            rel="stylesheet"
            href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
        />
        <!-- Daterange picker -->
        <link
            rel="stylesheet"
            href="/plugins/daterangepicker/daterangepicker.css"
        />
        <!-- summernote -->
        <link
            rel="stylesheet"
            href="/plugins/summernote/summernote-bs4.min.css"
        />
        {{-- custom css --}}
        <link
            rel="stylesheet"
            href="/dist/css/custom.css"
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
                    src="/img/logo.jpeg"
                    alt="Logo"
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
                        src="/img/logo.jpeg"
                        alt="Logo"
                        class="brand-image img-circle elevation-3"
                        style="opacity: 0.8"
                    />
                    <span class="brand-text font-weight-light">Retribusi PAD | ADMIN</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    
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
                            <a href="#" class="nav-link">
                              <i class="nav-icon"></i>
                              <p>
                                @auth
                                    {{auth()->user()->name}} ({{auth()->user()->role}})
                                @endauth
                                <i class="fas fa-angle-left right"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <div class="nav-link">
                                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-block">Logout</button>
                                </form>
                                  
                                </div>
                              </li>
                            </ul>
                          </li>
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
                                    <a href="/petugas" class="nav-link {{ Request::is('petugas*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>Petugas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/pemilik-usaha" class="nav-link {{ Request::is('pemilik-usaha*') ? 'active' : '' }}">
                                    <i class="nav-icon far fa-user"></i>
                                    <p>Pemilik Usaha</p>
                                    </a>
                            </li>
                            <li class="nav-header">Master Data</li>
                                <li class="nav-item">
                                    <a href="/jenis-usaha" class="nav-link {{ Request::is('jenis-usaha*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-store"></i>
                                    <p>Jenis Usaha</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/skala-usaha" class="nav-link {{ Request::is('skala-usaha*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-store"></i>
                                    <p>Skala Usaha</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/banjar" class="nav-link {{ Request::is('banjar*', 'tempekan*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-landmark"></i>
                                    <p>Banjar</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/iuran" class="nav-link {{ Request::is('iuran*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-money-bill"></i>
                                    <p>Iuran</p>
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="/denda" class="nav-link {{ Request::is('denda*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-money-bill"></i>
                                    <p>Denda</p>
                                    </a>
                                </li> --}}
                                
                            

                            <li class="nav-header">Data</li>
                            <li class="nav-item">
                                <a href="/usaha" class="nav-link {{ Request::is('usaha*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-store"></i>
                                <p>Usaha</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/transaksi" class="nav-link {{ Request::is('transaksi*') ? 'active' : '' }}">
                                <i class="fas fa-money-check"></i>
                                <p>Transaksi</p>
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

                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        <h1 class="m-0">@yield('page-title')</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            @yield('page-breadcrumb')
                            
                        </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

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
                    >Copyright &copy; {{date('Y')}}
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


        {{-- javascript --}}

       

        <!-- jQuery -->
        <script src="/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge("uibutton", $.ui.button);
        </script>
        <!-- Bootstrap 4 -->
        <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="/plugins/moment/moment.min.js"></script>
        <script src="/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/dist/js/pages/dashboard.js"></script>
        
        <!-- DataTables  & Plugins -->
        <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="/plugins/jszip/jszip.min.js"></script>
        <script src="/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

        @section('js')
            
        @show

    </body>
</html>
