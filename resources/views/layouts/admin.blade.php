<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mandalica SU</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@450&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets-backend/plugins/summernote/summernote-bs4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets-backend/plugins/sweetalert2/sweetalert2.min.css') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets-backend/plugins/fontawesome-free/css/all.min.css') }}">

    {{-- DATATABLES BOOT --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets-backend/css/adminlte.min.css') }}">
</head>

<body class="hold-transition layout-fixed layout-footer-fixed sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('sweetalert::alert')
        @include('layouts.navbar')
        <!-- /.navbar -->

        @include('layouts.sidebar')
        <!-- Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">@yield('title')</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                @yield('content')
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->
        @include('layouts.footer')
        <!-- Main Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <script src="{{ asset('assets-backend/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- jQuery -->
    <script src="{{ asset('assets-backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets-backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets-backend/js/adminlte.min.js') }}"></script>

    <script src="{{ asset('assets-backend/plugins/summernote/summernote-bs4.min.js') }}"></script>

</body>

</html>
