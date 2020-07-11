@include('back.layouts.header')
<body data-gr-c-s-loaded="true" cz-shortcut-listen="true">

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        @include('back.sections.topmenu')

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

           @include('back.sections.sidebar');

            <div class="page-body">

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>

@include('back.layouts.footer')



</body>
</html>
