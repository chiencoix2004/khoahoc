<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="dark">

 
<head>


    <meta charset="utf-8" /> 
    <title>@yield('title', 'Dashboard Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset("assets/Admin/images/favicon.ico")}}">
 

    <!-- App css -->
    <link href="{{asset("assets/Admin/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/Admin/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/Admin/css/app.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" />
   
</head>

<body>

    <!-- Top Bar Start -->
    
    @include("admin/layouts/header")
    <!-- Top Bar End -->
    <!-- leftbar-tab-menu -->
    @include("admin/layouts/sibar")
    <!--end startbar-->
    <div class="startbar-overlay d-print-none"></div>
    <!-- end leftbar-tab-menu-->

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content">
           @yield("content")
            <!--end Rightbar/offcanvas-->
            <!--end Rightbar-->
            <!--Start Footer--> 
            @include("admin/layouts/footer")

            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
    
     <!-- vendor js -->

    <script src="{{asset("assets/Admin/libs/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/Admin/libs/simplebar/simplebar.min.js")}}"></script>

    <script src="{{asset("assets/Admin/libs/apexcharts/apexcharts.min.js")}}"></script>
    <script src="{{asset("assets/Admin/apexcharts.com/samples/assets/stock-prices.js")}}"></script>
    <script src="{{asset("assets/Admin/js/pages/index.init.js")}}"></script>
    <script src="{{asset("assets/Admin/js/DynamicSelect.js")}}"></script>
    <script src="{{asset("assets/Admin/js/app.js")}}"></script>
</body>
<!--end body-->


<!-- Mirrored from mannatthemes.com/approx/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Nov 2024 13:38:33 GMT -->

</html>
