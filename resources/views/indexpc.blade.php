<!doctype html>
<html lang="pt-br" ng-app="todoApp">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

    <title> @yield('title')  </title>


    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">


    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif|Play' rel='stylesheet' type='text/css'>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>





<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <div id="logo-top">

            <img src="../img/logo.png" width="220"  id="img-logo" />


        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-brand">


            </li>
            <li>
                <a href="/"><i class="fa fa-desktop" style="color: white;" aria-hidden="true"></i>
                    Computadores</a>
            </li>

            <li>
                <a href="/ramal"><i class="fa fa-phone"  style="color: white; aria-hidden="true"></i>
                    Ramais</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-plus" style="color: white;" aria-hidden="true"></i> Grupos</a>
            </li>
            <li>
                <a href="/contact"><i class="fa fa-envelope" style="color: white;" aria-hidden="true"></i> Contato</a>
            </li>
        </ul>
    </div>

    @yield('content')





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    <script src="{{asset('js/custom.js') }} "> </script>
    





</body>
</body>
</html>

