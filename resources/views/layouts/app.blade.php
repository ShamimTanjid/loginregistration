<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="{{asset('Admin///fonts.gstatic.com')}}">
    <link href="{{asset('Admin/https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet">

   

     
    <!-- Base Css Files -->
        <link href="{{asset('Admin/css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{asset('Admin/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{asset('Admin/assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet" />
        <link href="{{asset('Admin/css/material-design-iconic-font.min.css')}}" rel="stylesheet">

        <!-- animate css -->
        <link href="{{asset('Admin/css/animate.css')}}" rel="stylesheet" />
        <!-- toaster -->
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
        <!-- Waves-effect -->
        <link href="{{asset('Admin/css/waves-effect.css')}}" rel="stylesheet">
        <!-- Custom Files -->
        <link href="{{asset('Admin/css/helper.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Admin/css/style.css')}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{asset('Admin/js/modernizr.min.js')}}"></script>
</head>
<body class="fixed-left">
    <div id="wrapper">
                           @guest
                            
                           @else
                            @include('Include.topbar')
                            @include('Include.leftbar') 
                        @endguest
        
          
        <main class="py-4">
            @yield('content')
        </main>
    </div>




      <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('Admin/js/jquery.min.js')}}"></script>
        <script src="{{asset('Admin/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('Admin/js/waves.js')}}"></script>
        <script src="{{asset('Admin/js/wow.min.js')}}"></script>
        <script src="{{asset('Admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('Admin/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('Admin/assets/chat/moment-2.2.1.js')}}"></script>
        <script src="{{asset('Admin/assets/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('Admin/assets/jquery-detectmobile/detect.js')}}"></script>
        <script src="{{asset('Admin/assets/fastclick/fastclick.js')}}"></script>
        <script src="{{asset('Admin/assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('Admin/assets/jquery-blockui/jquery.blockUI.js')}}"></script>

        
        <!-- Counter-up -->
        <script src="{{asset('Admin/assets/counterup/waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('Admin/assets/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{asset('Admin/js/jquery.app.js')}}"></script>
        <!-- toaster -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <!-- Dashboard -->
        <script src="{{asset('Admin/js/jquery.dashboard.js')}}"></script>




        <script>
      @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                 toastr.info("{{ Session::get('messege') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
      @endif
    </script>

        
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
</body>
</html>

