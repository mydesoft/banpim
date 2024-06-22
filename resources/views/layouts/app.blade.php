<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:image" content="">
	<meta name="format-detection" content="">
	
	<!-- PAGE TITLE HERE -->
	<title>Yash Admin Sales Management System</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}">
	
	<link href="{{asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/swiper/css/swiper-bundle.min.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/swiper/css/swiper-bundle.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
	<link href="{{asset('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
	<link href="../../cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="{{asset('vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css" />
	
	<!-- tagify-css -->
	<link href="{{asset('vendor/tagify/dist/tagify.css')}}" rel="stylesheet">
	
	<!-- Style css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
	
</head>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">



    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div>
		@include('includes.header')
		@include('includes.sidebar')
		@yield('content')
		@include('includes.footer')
	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('vendor/global/global.min.js')}}"></script>
	<script src="{{asset('vendor/chart.js/Chart.bundle.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('vendor/apexchart/apexchart.js')}}"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{asset('js/dashboard/dashboard-3.js')}}"></script>
	
	
	
	<!-- tagify -->
	 
	<script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('vendor/datatables/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('vendor/datatables/js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('vendor/datatables/js/jszip.min.js')}}"></script>
	<script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>
   
	<!-- Apex Chart -->
	
	<script src="{{asset('vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
	<script src="{{asset('vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
	

	<!-- Vectormap -->
    <script src="{{asset('js/custom.js')}}"></script>
	<script src="{{asset('js/deznav-init.js')}}"></script>
	<script src="{{asset('js/demo.js')}}"></script>
    <script src="{{asset('js/styleSwitcher.js')}}"></script>
    <script src="{{asset('js/toastr/toastr.min.js')}}"></script>
    <script>
        toastr.options.progressBar = true;
        toastr.options.positionClass = "toast-bottom-right";
        toastr.options.timeOut = 10000;

        @if (session('success'))
            toastr.success("{{session('success')}}");
        @endif

        @if (session('error'))
            toastr.error("{{session('error')}}");
        @endif

    </script>
</body>

</html>