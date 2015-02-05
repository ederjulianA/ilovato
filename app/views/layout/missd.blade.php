<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login page - Typica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ARE U MISS D">
    <meta name="author" content="Eder Alvarez">

    <!-- Le styles -->
    <link href="{{asset('missd/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('missd/css/bootstrap-responsive.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('missd/css/typica-login.css')}}">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le favicon -->
    <link rel="shortcut icon" href="favicon.ico">

  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.html"><img src="{{asset('missd/lmd.png')}}" alt="Typica - Bootstrap Awesome Template!"></a>
        </div>
      </div>
    </div>

         @yield('content')  


    <footer class="white navbar-fixed-bottom">
      Alread have an account? <a href="index.html" class="btn btn-black">Sign in</a>
    </footer>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('missd/js/jquery.js')}}"></script>
    <script src="{{asset('missd/js/bootstrap.js')}}"></script>
    <script src="{{asset('missd/js/backstretch.min.js')}}"></script>
    <script src="{{asset('missd/js/typica-login.js')}}"></script>
    <script src="{{asset('missd/js/missd.js')}}"></script>

  </body>
</html>
