@include('back.layouts.header')

<body class="hold-transition skin-primary dark-sidebar sidebar-mini">
    <div class="wrapper">
        @include('back.sections.topmenu')



        @include('back.sections.sidebar');
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container">


                <!-- Main content -->
                @yield('content')
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->
        @include('back.layouts.footer')
