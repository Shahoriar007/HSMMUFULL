<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HSMM">

    <!-- ========== Page Title ========== -->
    <title>Haji Shariatullah Model Madrasah</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('userFrontend/assets/img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('userFrontend/assets/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('userFrontend/assets/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('userFrontend/assets/img/favicon/site.webmanifest')}}">
    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('userFrontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <link href="{{ asset('userFrontend/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/elegant-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{ asset('userFrontend/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('userFrontend/assets/css/style1.css')}}" rel="stylesheet">
    <link href="{{ asset('userFrontend/assets/css/responsive.css')}}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    
    

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>


@include('user.userNavbar')

@yield('home')
@yield('onlineAdmission')
@yield('notice')
@yield('noticeView')
@yield('gallery')
@yield('blogView')
@yield('userDashboard')
@yield('teacherApplicationForm')
@yield('ourTeam')
@yield('gallery')



@include('user.userFooter')



    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('userFrontend/assets/js/jquery-1.12.4.min.js')}}"></script>
    <!--<script src="https://code.jquery.com/jquery-3.6.0.js"></script>-->
    <script src="{{ asset('userFrontend/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('userFrontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('userFrontend/assets/js/jquery.appear.js')}}"></script>
    <script src="{{ asset('userFrontend/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('userFrontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('userFrontend/assets/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{ asset('userFrontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('userFrontend/assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('userFrontend/assets/js/progress-bar.min.js')}}"></script>
    <script src="{{ asset('userFrontend/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('userFrontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('userFrontend/assets/js/count-to.js')}}"></script>
    <script src="{{ asset('userFrontend/assets/js/YTPlayer.min.js')}}"></script>
    <script src="{{ asset('userFrontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('userFrontend/assets/js/loopcounter.js')}}"></script>
    <script src="{{ asset('userFrontend/assets/js/bootsnav.js')}}"></script>
    <script src="{{ asset('userFrontend/assets/js/main.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"> </script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
        break;
        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
        break;
        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
        break;
        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
        break;
    }
    @endif
</script>




</body>

</html> 





