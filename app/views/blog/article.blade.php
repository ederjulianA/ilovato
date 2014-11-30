@extends('layout.main')

@section('title')
	Article || {{$a->teaser}} 
@stop

@section('content-page')
	<meta name="description" content=" Artilce {{$a->teaser}}">
		<meta name="author" content="{{$a->user->username}}">

	<meta property="og:type" content="website"/>
	<meta property="og:title" content="Article || {{$a->teaser}} "/>
	<meta property="og:site_name" content="iLoVaTo"/>
	<meta property="og:description" content="Artilce {{$a->teaser}}"/>
	<meta property="og:url" content="http://ilovato.co/{{$a->id}}-{{$a->slug}}"/>
	<meta property="og:image" content="http://ilovato.co/{{ $a->img }}"/>	

@stop
@section('content')

	<section id="hero" class="light-typo" >
				<div id="cover-image" class=" animated fadeIn " style="background-image:url({{ asset($a->img) }});"></div>
				<div class="container welcome-content" >
					<div class="middle-text">
						<h1>{{$a->title}}</h1>
						<h2>{{$a->category->cat_name}}</h2>
					</div>	
				</div>
			</section>


	<section id="breadcrumb">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<ol class="breadcrumb">
								<li><a href="/">Blog</a></li>
								<li><a href="#">{{$a->category->cat_name}}</a></li>
								<li class="active">{{$a->title}}</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
	

	<div class="container content"  background="">
					<div class="row">
						<div class="col-md-10 col-md-offset-1" >
							
							<div class="post-date">
								<abbr class="timeago" title="{{ $a->created_at }}">{{ $a->created_at }}</abbr>
								{{ date("d F Y",strtotime($a->created_at)) }}  | <a href="">{{$a->user->username}} </a> <span><a href="">0 Comments</a></span>
							</div>		
							<!-- <h1>We don't have a brig</h1> -->
							
								{{$a->content}}
								<div class="post-date">
									true | <a href="">speech</a> , <a href="">feeling</a> , <a href="">love</a> 
									<span>

									</span>
								</div>
								<ul class="social-links outline text-center">
									<li><a href="https://twitter.com/ederjulianA" target="_blank"><i class="icon-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/ederjulian.alvarezcarrero"target="_blank"><i class="icon-facebook"></i></a></li>
										<li><a href="#link"><i class="icon-googleplus"></i></a></li>
									</ul>

							<div id="author" class="clearfix">
								<img class="img-circle" alt="" src="{{asset('blog/img/eder.jpg')}}" height="96" width="96">
								<div class="author-info">
									<h3>{{$a->user->username}}</h3>
									<p>I've been writing for a while. You can follow him on <a href="https://twitter.com/ederjulianA">Twitter</a>.</p>
								</div>
							</div>

							<!--<div class="post-popular">
								<div class="row hidden-xs">
									<div class="col-sm-4 col-md-4">	
										<a href="post-video.html"><img src="img/img2.jpg" class="img-responsive" alt="img2"></a>
										<h4 class="text-center"><a href="post-video.html">But I've never been to the moon!</a></h4>
										<p class="post-date text-center">MAY 10, 2014</p>
									</div>
									<div class="col-sm-4 col-md-4">	
										<a href="post-typography.html"><img  src="img/img1.jpg" class="img-responsive" alt="img1"></a>
										<h4 class="text-center"><a href="post-typography.html">Speach of true</a></h4>
										<p class="post-date text-center">september 27, 2014</p>
										
									</div>
									<div class="col-sm-4 col-md-4">	
										<a href="post-image.html"><img  src="img/img3.jpg" class="img-responsive" alt="img3"></a>
										<h4 class="text-center"><a href="post-image.html">Every other day it's food, food, food.</a></h4>
										<p class="post-date text-center">april 2, 2014</p>
										
									</div>
								</div>
								<div class="row visible-xs">
									<div class="col-sm-12">
										<div class="media">
											<a class="pull-left" href="post-video.html"><img class="media-object" src="img/img2.jpg" width="100" alt=""></a>
											<div class="media-body">
												<h4 class="media-heading"><a href="post-video.html">But I've never been to the moon!</a></h4>
												<p class="post-date">may 10, 2014</p>
											</div>
										</div>
										<div class="media">
											<a class="pull-left" href="post-typography.html"><img class="media-object" src="img/img1.jpg" width="100" alt=""></a>
											<div class="media-body">
												<h4 class="media-heading"><a href="post-typography.html">Speach of true</a></h4>
												<p class="post-date">september 27, 2014</p>
											</div>
										</div>
										<div class="media">
											<a class="pull-left" href="post-image.html"><img class="media-object" src="img/img3.jpg" width="100" alt=""></a>
											<div class="media-body">
												<h4 class="media-heading"><a href="post-image.html">Every other day it's food, food, food.</a></h4>
												<p class="post-date">april 2, 2014</p>
											</div>
										</div>
										
									</div>
								</div>
							</div>-->

							<!--<h3>11 Comments</h3>	
							<div class="media">
								<hr>
								<a class="pull-left avatar" href="#">
									<img class="media-object img-circle" src="img/author-sing.jpg" width="40" height="40" alt="">
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="">Melissa Sing</a><span>5h ago | <a href="#">REPLY</a></span></h4>
									<p>Good news, everyone! There's a report on TV with some very bad news! Daddy Bender, we're hungry. One hundred dollars. Leela, Bender, we're going grave robbing.</p>


									<div class="media">
										<a class="pull-left avatar" href="#">
										  <img class="media-object img-circle" src="img/author-red.jpg" width="40" height="40" alt="">
										</a>
										<div class="media-body">
											<h4 class="media-heading"><a href="">Jessica Red</a><span>17h ago | <a href="#">REPLY</a></span></h4>
											<p>Who am I making this out to? You're going back for the Countess, aren't you? Does anybody else feel jealous and aroused and worried? </p>
										</div>
									</div>


									<div class="media">
										<a class="pull-left avatar" href="#">
											 <img class="media-object img-circle" src="img/author-sans.jpg" width="40" height="40" alt="">
										</a>
										<div class="media-body">
											<h4 class="media-heading"><a href="">Dorin Sans</a><span>2d ago | <a href="#">REPLY</a></span></h4>
											<p>Fetal stemcells, aren't those controversial? Ven ve voke up, ve had zese wodies. You guys realize you live in a sewer, right? And why did 'I' have to take a cab? Why would I want to know that? Are you crazy? I can't swallow that.</p>
										</div>
									</div>
								</div>
								<div class="media">
										<a class="pull-left avatar" href="#">
										  <img class="media-object img-circle" src="img/author-red.jpg" width="40" height="40" alt="">
										</a>
										<div class="media-body">
											<h4 class="media-heading"><a href="">Jessica Red</a><span>3d ago | <a href="#">REPLY</a></span></h4>
											<p>It may comfort you to know that Fry's death took only fifteen seconds, yet the pain was so intense, that it felt to him like fifteen years.  </p>
										</div>
									</div>
							</div>

							<div id="comments_pagination">
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="#">2</a>
								<a class="next page-numbers" href="#"><i class="icon-arrow-right2"></i></a>
							</div>

							<h3>Add a new comment</h3>
							<form action="index.html" method="post" novalidate class="myform" id="mycomment">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 wow fadeInUp" >
										<div class="form-group">
											<label class="control-label" for="contact-message">Join the discussion...</label>
											<div class="controls">
												<textarea name="comments" placeholder="Join the discussion..." class="form-control input-lg requiredField" rows="3" data-error-empty="Please enter comment"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-md-6">
												<div class="form-group">
													<label class="control-label">Name</label>
													<div class="controls">
														<input name="contactName" placeholder="Name" class="form-control input-lg requiredField " type="text" data-error-empty="Please enter name">
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-6">
												<div class="form-group">
													<label class="control-label" for="contact-mail">Email</label>
													<div class=" controls">
														<input name="email" placeholder="Email" class="form-control input-lg requiredField" type="email" data-error-empty="Please enter email" data-error-invalid="Invalid email address">
													</div>
												</div>	
											</div>	
										</div>	
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-md-6">
												<div class="form-group">
													<label class="control-label">Website</label>
													<div class="controls">
														<input name="contactName" placeholder="Website" class="form-control input-lg " type="text">
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-6">
												<div class="form-group">
													<button name="submit" type="submit" class="btn btn-block" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Comment Sent">Send Comment</button>
													<input type="hidden" name="submitted" id="submitted3" value="true">
												</div>	
											</div>	
										</div>	


									</div>
								</div>
							</form>-->

						</div>
					</div>
	</div>


@stop