<!doctype html>
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8">
		@yield('content-page')
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Merriweather:400,400italic,700italic" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{asset('blog/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('blog/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('blog/css/icons.css')}}">
		<link rel="stylesheet" href="{{asset('blog/css/animate.min.css')}}">
		<link rel="shortcut icon" href="{{asset('blog/img/ico/32.png')}}" sizes="32x32" type="image/png"/>
		<link rel="apple-touch-icon-precomposed" href="{{asset('blog/img/ico/60.png')}}" type="image/png"/>
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('blog/img/ico/72.png')}}" type="image/png"/>
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{asset('blog/img/ico/120.png')}}" type="image/png"/>
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="i{{asset('blog/mg/ico/152.png')}}" type="image/png"/>
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->


	</head>

	<body id="home">
			<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57077022-1', 'auto');
  ga('send', 'pageview');

</script>
		<div id="menu" class="menu-right">
			<ul>
				<form class="menu-search" >
					<div class="form-group header">
						<i class="icon-search searchico"></i>
						<input type="text" placeholder="Blog Search">
						<a href="#" class="close-menu"><i class="icon-close"></i></a>
					</div>
				</form>
				<li><a href="/"><i class="icon-lime"></i>Home</a></li>
				<!--<li><a href="about.html"><i class="icon-user"></i>About</a></li>
				<li class="submenu">
					<a href="#"><i class="icon-books"></i>Categories<b class="caret"></b></a>
					<ul class="submenu-list">
						<li><a href="category.html">Blogroll <span class="badge golden">2</span></a></li>
						<li><a href="category.html">Quotes<span class="badge">4</span></a></li>
						<li><a href="category.html">Travel<span class="badge red">12</span></a></li>
						<li><a href="category.html">Writing<span class="badge blue">7</span></a></li>
					</ul>		
				</li>
				<li class="submenu submenu-open">
					<a href="#"><i class="icon-file"></i>Pages<b class="caret"></b></a>
					<ul class="submenu-list">
						<li><a href="post-image.html">Post Image</a></li>
						<li><a href="post-audio.html">Post Audio</a></li>
						<li><a href="post-video.html">Post Video</a></li>						
						<li><a href="post-typography.html">Typography</a></li>
						<li><a href="author.html">Author</a></li>
						<li><a href="search.html">Search</a></li>
						<li><a href="404.html">404 Error</a></li>
					</ul>		
				</li>-->
				<li class="submenu">
					<a href="#"><i class="icon-calendar"></i>Archives <b class="caret"></b></a>
					<ul class="submenu-list">
						<li><a href="#">June<span>2014</span></a></li>
						<li><a href="#">May<span>2014</span></a></li>
						<li><a href="#">January<span>2014</span></a></li>
						<li><a href="#">October<span>2013</span></a></li>
					</ul>	
				</li>
				<li><a href="#"><i class="icon-envelope"></i>Contact</a></li>
			</ul>
		</div>
		<div id="wrap">
			<div id="main-nav" class="">
				<div class="container">
					<div class="nav-header">
							<a class="nav-brand" href="/"><i class="icon-lime"></i>iLoVaTo</a>
							<a class="menu-link nav-icon" href="#"><i class="icon-menu2"></i></a>
							@if(!Auth::check())
							<a class="btn btn-blog outline-white pull-right" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
							@endif
						</div>
				</div>
			</div>
					
			@yield('header1')

			@yield('content')
				<footer>
					<div class="footer">
						<div class="container">
							<div class="row">
								<div class="col-sm-4 col-md-4 footer-widget">
									<h3>Statistics</h3>

									<span>We can't compete with Mom! Her company is big and evil! </span>

									<div class="stats">
										<div class="line">
											<span class="counter">27</span>
											<span class="caption">Articles</span>
										</div>
										<div class="line">
											<span class="counter">208</span>
											<span class="caption">Comments</span>
										</div>
										<div class="line">
											<span class="counter">2</span>
											<span class="caption">Authors</span>
										</div>                    
									</div>
								</div>

								<div class="col-sm-4 col-md-4 footer-widget">
									<h3>Recent posts</h3>
									<div class="post-recent-widget">
										<div class="row">
											<div class="col-sm-12">
												<div class="media">
													<a class="pull-left" href="#"><img class="media-object" src="{{asset('blog/img/img2.jpg')}}" width="80" alt=""></a>
													<div class="media-body">
														<h4 class="media-heading"><a href="#">But I've never been to the moon!</a></h4>
														<p class="post-date">may 10, 2014</p>
													</div>
												</div>
												<div class="media">
													<a class="pull-left" href="#"><img class="media-object" src="{{asset('blog/img/img1.jpg')}}" width="80" alt=""></a>
													<div class="media-body">
														<h4 class="media-heading"><a href="#">We don't have a brig</a></h4>
														<p class="post-date">september 27, 2014</p>
													</div>
												</div>
												<div class="media">
													<a class="pull-left" href="#"><img class="media-object" src="{{asset('blog/img/img3.jpg')}}" width="80" alt=""></a>
													<div class="media-body">
														<h4 class="media-heading"><a href="#">Every other day it's food, food, food.</a></h4>
														<p class="post-date">april 2, 2014</p>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-4 col-md-4 footer-widget clearfix">
									<h3>Tags</h3>
									<ul class="tags">
										<li><a href="#">OpenPGP</a></li>
										<li><a href="#">Django</a></li>
										<li><a href="#">Bitcoin</a></li>
										<li><a href="#">Security</a></li>
										<li><a href="#">GNU/Linux</a></li>
										<li><a href="#">Git</a></li>
										<li><a href="#">Homebrew</a></li>
										<li><a href="#">Debian</a></li>                            
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="copyright">
						<div class="container">
							<p class="pull-left">by <a href="#">Eder Álvarez.</a></p>
							<ul class="social-links pull-right">
								<li><a href="https://twitter.com/ederjulianA" target="_blank"><i class="icon-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/ederjulian.alvarezcarrero"target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="#link"><i class="icon-googleplus"></i></a></li>
							</ul>
						</div>
					</div>
				</footer>
		</div>		

			<div class="modal fade login" id="loginModal" aria-hidden="true">
			  <div class="modal-dialog login">
				  <div class="modal-content">
					 <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title">Login with</h4>
					</div>
					<div class="modal-body">  
						<div class="box">
							<div class="form loginBox">
								<form class="myform" method="post" action="/login" accept-charset="UTF-8">
									<div class="form-group">
										<label class="control-label">Email</label>
										<div class="controls">
											<input id="email" class="form-control" type="text" placeholder="Email" name="email">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">password</label>
										<div class="controls">
											<input id="password" class="form-control" type="password" placeholder="Password" name="password">
										</div>
									</div>
									<p class="text-center"><a href="">Forgot password?</a></p>
									<input class="btn btn-block" type="submit" value="Login" >
								</form>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<!--<div class="forgot login-footer">
							<span>Looking to 
								 <a href="#">create an account</a>
							?</span>
						</div>-->
					</div>        
				  </div>
			  </div>
		  </div>
		<script type="text/javascript" src="{{asset('blog/js/jquery-1.9.1.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/placeholders.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/wow.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/custom.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/ga.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/time.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/jquery.timeago.js')}}"></script>
	</body>
</html>