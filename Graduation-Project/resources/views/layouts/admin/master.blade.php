<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/vendor/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/vendor.bundle.base.css')}}">
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('admin/css/style.css') }}" />
    @yield('title')
</head>
<body>
<div class="container-scroller">
    @include("layouts.admin.inc.admin-navbar")
    <!----nave sidebar-->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       @include("layouts.admin.inc.admin-sidebar")
        <!--content-->
        <div class="main-panel">
            <div class="content-wrapper">


                    <div class="col-md-12 stretch-card grid-margin">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>




                            </div>
                        </div>
                    </div>
                </div>


<!--footer-->
@include("layouts.admin.inc.footer")
</div>
</div>
</div>
<script src="{{ asset('admin/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('admin/js/off-canvas.js')}}"></script>
<script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('admin/js/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('admin/js/dashboard.js')}}"></script>
<!-- End custom js for this page -->
</body>
</html>
