@include('includes.admin.html-header')

<body class="navbar-top">

<!-- Main navbar -->
@include('includes.admin.header')
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
    @include('includes.admin.sidebar')
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            @yield('page-header')

            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

            @yield('content')




                <!-- Footer -->
            @include('includes.admin.footer')
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>
