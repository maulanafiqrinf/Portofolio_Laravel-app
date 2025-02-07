@include('templates.backoffice.partials.head')

<body>

    <!-- Loading starts -->
    @include('templates.backoffice.partials.loading')
    <!-- Loading ends -->

    <!-- Page wrapper starts -->
    <div class="page-wrapper">

        <!-- Main container starts -->
        <div class="main-container">

            <!-- Sidebar wrapper starts -->
            @include('templates.backoffice.partials.sidebar')
            <!-- Sidebar wrapper ends -->

            <!-- App container starts -->
            <div class="app-container">

                <!-- App header starts -->
                @include('templates.backoffice.partials.nav-head')
                <!-- App header ends -->

                <!-- App hero header starts -->
                <div class="app-hero-header d-flex align-items-center">

                    <!-- Breadcrumb starts -->
                    @include('templates.backoffice.partials.breadcrumb')
                    <!-- Breadcrumb ends -->
                    <!-- Sales stats ends -->

                </div>
                <!-- App Hero header ends -->

                <!-- App body starts -->
                <div class="app-body">
                    <!-- Content starts -->
                    @yield('content')
                    <!-- Content ends -->
                </div>
                <!-- App body ends -->

                <!-- App footer starts -->
                @include('templates.backoffice.partials.footer')
                <!-- App footer ends -->

            </div>
            <!-- App container ends -->

        </div>
        <!-- Main container ends -->

    </div>
    <!-- Page wrapper ends -->
    @include('templates.backoffice.partials.vendor-scripts')
</body>
