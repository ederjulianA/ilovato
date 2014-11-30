<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Admin ilovato</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">



<!-- Latest compiled and minified JavaScript -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
<!--<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.css') }}"></link>-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/prettify.css') }}"></link>
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap-wysihtml5.css') }}"></link>


<STYLE TYPE="text/css">
	body{
		padding-top: 70px;
	}
</STYLE>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin iLovato</a>
          <a href="{{ URL::route('logout') }}">Logout</a>
        </div>
        
      </div>
</nav>
	@yield('content')
    

<!--<div class="container">
	<div class="hero-unit" style="margin-top:40px">
		<h1 style="font-size:58px">bootstrap-wysihtml5 <small>Simple, beautiful wysiwyg editors</small></h1>
		<hr/>
		<textarea class="textarea" placeholder="Enter text ..." style="width: 810px; height: 200px"></textarea>
	</div>
	
	
</div>-->

   <hr>

      <footer>
        <p>&copy; iLoVaTo 2014</p>
      </footer>
    </div> <!-- /container -->


<script src="{{ asset('admin/js/wysihtml5-0.3.0.js') }}"></script>
<script src="{{ asset('admin/js/jquery-1.7.2.min.js') }}"></script>
<script src="{{ asset('admin/js/prettify.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap-wysihtml5.js') }}"></script>

<script>
	$('.textarea').wysihtml5();
</script>

<script type="text/javascript" charset="utf-8">
	$(prettyPrint);
</script>

</body>
</html>