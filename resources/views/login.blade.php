<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from yashadmin.dexignzone.com/xhtml/page-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 09:49:20 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
	<meta property="og:title" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
	<meta property="og:description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
	<meta property="og:image" content="page-error-404.html">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>BanPim Management System</title>
	
	<!-- FAVICONS ICON -->
	{{-- <link rel="shortcut icon" type="image/png" href="images/favicon.png"> --}}
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<h2>BanPim Login</h2>
									</div>
                                    <form method="POST" action="/login">
                                        @csrf
                                        <div class="mb-3">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email">
                                            @if($errors->has('email'))
                                                <span class="text-danger text-small" role="alert">
                                                    {{$errors->first('email')}}
                                                </span>
                                            @endif
                                        </div>

                                        <div class="mb-3">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password">
                                            @if($errors->has('password'))
                                                <span class="text-danger text-small" role="alert">
                                                    {{$errors->first('password')}}
                                                </span>
                                            @endif
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>

                                    <div class="mt-3">
                                        <a href="/register" class="text-primary"> Don't  have an account? Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
    <script src="{{asset('vendor/global/global.min.js')}}"></script>
    <!-- Custom script -->
    <script src="{{asset('vendor/deznav/deznav.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/deznav-init.js')}}"></script>
    <script src="{{asset('js/toastr/toastr.min.js')}}"></script>
    <script>
        toastr.options.progressBar = true;
        toastr.options.positionClass = "toast-top-right";
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