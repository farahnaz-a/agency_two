@include('includes.backend.header')
@include('includes.backend.dashboard_sidebar')    
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">

                    @yield('breadcrumbs')

                    {{-- <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Layout Empty</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Layouts</a>
                                    </li>
                                    <li class="breadcrumb-item active">Layout Empty
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div> --}}
                    
                </div>
               
            </div>
            <div class="content-body">


                    {{-- main content start --}}

                    @yield('content')

                    {{-- main content end --}}


            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @include('includes.backend.footer')
