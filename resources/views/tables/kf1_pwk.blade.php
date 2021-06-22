@include('_design._head')
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{ url('assets/dist/css/ionicons.min.css') }}">
<!-- DataTables -->
<link rel="stylesheet" href="{{ url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">

<!-- Google Font: Source Sans Pro -->
<link href="{{ url('assets/dist/css/font.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('_design.main_header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('_design.main_sidebar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('_design.breadcrumb')

            <!-- Main content -->
            @include('tables.kf1_pwk_content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('_design.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('tables.daftar_script')
</body>
</html>
