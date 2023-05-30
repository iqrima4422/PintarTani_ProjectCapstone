<!DOCTYPE html>
<html lang="en">

<head>
    @include('HomePage.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('HomePage.navbar')
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        @include('HomePage.footer')
    </div>

    <!-- REQUIRED SCRIPTS -->
    @include('HomePage.script')
</body>

</html>