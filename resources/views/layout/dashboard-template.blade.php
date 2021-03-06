<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--fav icon-->
    <link rel="icon" type="image/jpg" href="{{asset('asset/images/logoitcc.png')}}">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('asset/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/icon-sets.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/main.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/demo.css')}}" rel="stylesheet">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <!-- Javascript -->
    <script src="{{asset('asset/lib/jquery/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('asset/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('asset/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('asset/lib/jquery/jquery-2.1.0.min.js')}}"></script>
    <script src="{{asset('asset/lib/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('asset/js/klorofil.min.js')}}"></script>
    
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- SIDEBAR -->
        <div class="sidebar" style="background-color: #650802">
            <div class="brand" style="background-color: #650802">
                <a href="index.html"><img src="asset/images/logo-itcc5.png" alt="ITCC Logo" class="img-responsive logo" width="100px" height="100px"></a>
            </div>
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="/dashboard"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Verifikasi</span></a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-cloud-upload"></i> <span>Upload Data</span></a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-cog"></i> <span>Setting</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- NAVBAR -->
            <nav class="navbar navbar-default" style="background-color: #650802">
                <div class="container-fluid">
                    <div class="navbar-btn">
                        <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle" style="color: white"></i></button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
                            <span class="sr-only">Toggle Navigation</span>
                            <i class="fa fa-bars icon-nav"></i>
                        </button>
                    </div>
                    <div id="navbar-menu" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white"><img src="asset/images/user.png" width="30px" height="30px" class="img-circle" alt="Avatar"> <span style="color: white">Adikur</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                                    <li><a href="#"}}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                                </ul>

                                <form id="logout-form" action="#" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- END NAVBAR -->
            <!-- MAIN CONTENT -->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- END MAIN CONTENT -->
            <footer>
                <div class="container-fluid">
                    <p class="copyright" style="color: #650802;">&copy; Information Technology Creative Competition 2018 | <a href="http://it.unud.ac.id" style="color: #ec6b63;">Teknologi Informasi Udayana</a></p>
                </div>
            </footer>
        </div>
        <!-- END MAIN -->
    </div>
    <!-- END WRAPPER -->

</body>

</html>
