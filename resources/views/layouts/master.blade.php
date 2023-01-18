<!doctype html>
<html lang="en">

    @include('layouts.head')

    <body data-topbar="dark" data-layout="horizontal">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            @include('layouts.header')

            @include('layouts.menu')


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">

                        @yield('content')
                        
                    </div>
                </div>
                <!-- End Page-content -->

                

                @include('layouts.footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        @include('layouts.script')
    </body>

</html>