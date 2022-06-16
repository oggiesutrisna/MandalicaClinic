<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Superuser Mandalika</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets-backend/plugins/sweetalert2/sweetalert2.min.css') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets-backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets-backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-backend/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-backend/plugins/summernote/summernote-bs4.min.css') }}}">
    <link rel="stylesheet"
        href="{{ asset('assets-backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets-backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets-backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    {{-- DATATABLES BOOT --}}
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
    {{-- Datatables set --}}
    <script src="{{ asset('assets-backend/plugins/datatables-select/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets-backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets-backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets-backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets-backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets-backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets-backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets-backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    {{-- summernote --}}
    <script src="{{ asset('assets-backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
    {{-- select2 --}}
    <script src="{{ asset('assets-backend/plugins/select2/js/select2.full.min.js') }}"></script>
    {{-- ellipsis for datatables --}}
    <script src="{{ asset('https://cdn.datatables.net/plug-ins/1.12.1/dataRender/ellipsis.js') }}"></script>

    <script>
        $('.deleteconfirmation').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data('name');
            event.preventDefault();
            swal({
                    title: `Anda yakin untuk menghapus ${name}?`,
                    text: "Jika anda ingin menghapusnya, data ini akan terhapus selama - lamanya :(.",
                    icon: "warning",
                    buttons: true,
                    dangermode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>

    <script>
        $(function() {
            // Summernote for packages
            $('#summernote1').summernote({
                placeholder: 'Tulis Disini...',
                tabsize: 2,
                height: 250,
                counter: true,
            })

            // select2
            $('.select2').select2()

            // select2bs4
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>

    <script>
        $(function() {
            $('#tablepackages').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "select": true,
                "buttons": [
                    'copy', 'excel', 'pdf'
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Indonesian.json"
                }
            });
        });
    </script>
    <script>
        $(function() {
            $('#pasientable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "select": true,
                "buttons": [
                    'copy', 'excel', 'pdf'
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Indonesian.json"
                }
            });
        });
    </script>
    <script>
        $(function() {
            $('#tableblog').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "select": true,
                "buttons": [
                    'copy', 'excel', 'pdf'
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Indonesian.json"
                }
            });
        });
    </script>
    <script>
        $(function() {
            $('#tableobat').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "select": true,
                "buttons": [
                    'copy', 'excel', 'pdf'
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Indonesian.json"
                }
            });
        });
    </script>
    <script>
        $(function() {
            $('#tablepesan').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "select": true,
                "buttons": [
                    'copy', 'excel', 'pdf'
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Indonesian.json"
                }
            });
        });
    </script>

</body>

</html>
