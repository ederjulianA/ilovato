@extends('layout.main')

@section('title')
iLoVaTo || This is part of my therapy, and learning process 
@stop

@section('content-page')
	<meta name="description" content="I don't know exactly whst is it, I just know taht i wanted to write something. cause it feels good">
		<meta name="author" content="Eder Julian Alvarez">

	<meta property="og:type" content="website"/>
	<meta property="og:title" content="iLoVaTo || This is part of my therapy, and learning process"/>
	<meta property="og:site_name" content="iLoVaTo"/>
	<meta property="og:description" content="I don't know exactly whst is it, I just know taht i wanted to write something. cause it feels good"/>
	<meta property="og:url" content="http://ilovato.co"/>
	<meta property="og:image" content="http://ilovato.co/blog/img/img5.jpg"/>	
@stop

@section('header1')
	<section id="hero" class="light-typo">
				<div id="cover-image" class="image-bg animated fadeIn"></div>
				<div class="container welcome-content">
					<div class="middle-text">
						<h1>HELLO, I AM EDER</h1>
						<h2><b>And this is...</b> actually, I don't know <br>I just want to <b>write</b></h2>
						<a class="btn smooth-scroll" href="#start">Get Stated</a>
					</div>
				</div>
				 @if ($errors->any())
					<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Por favor corrige los siguentes errores:</strong>
					<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
					</ul>
					</div>
				@endif
			</section>
@stop


@section('content')

	<div id="start" class="container content">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						@foreach($articles as $article)
							<article class="clearfix">
								<div class="post-date">
									{{ date("d F Y",strtotime($article->created_at)) }} at {{ date("g:ha",strtotime($article->created_at)) }} | <a href="">{{$article->user->username}} </a> <span><a href="">0 Comments</a></span>
								</div>		
								<h2><a href="{{URL::route('article', array('id'=>$article->id,'slug'=>$article->slug))}}">{{$article->title}}</a></h2>
								<p>{{$article->teaser}} <a class="" href="{{URL::route('article', array('id'=>$article->id,'slug'=>$article->slug))}}">Read more</a>
								</p>
							</article>
						@endforeach	
						

						<div class="post-popular">
							<div class="row hidden-xs">
								<div class="col-sm-4 col-md-4">	
									<a href="#"><img src="{{asset('blog/img/img2.jpg')}}" class="img-responsive" alt="img2"></a>
									<h4 class="text-center"><a href="#">But I've never been to the moon!</a></h4>
									<p class="post-date text-center">MAY 10, 2014</p>
								</div>
								<div class="col-sm-4 col-md-4">	
									<a href="post-#"><img  src="{{asset('blog/img/img1.jpg')}}" class="img-responsive" alt="img1"></a>
									<h4 class="text-center"><a href="#">We don't have a brig</a></h4>
									<p class="post-date text-center">september 27, 2014</p>
									
								</div>
								<div class="col-sm-4 col-md-4">	
									<a href="#"><img  src="{{asset('blog/img/img3.jpg')}}" class="img-responsive" alt="img3"></a>
									<h4 class="text-center"><a href="#">Every other day it's food, food, food.</a></h4>
									<p class="post-date text-center">april 2, 2014</p>
									
								</div>
							</div>
							<div class="row visible-xs">
								<div class="col-sm-12">
									<div class="media">
										<a class="pull-left" href="#"><img class="media-object" src="{{asset('blog/img/img2.jpg')}}" width="100" alt=""></a>
										<div class="media-body">
											<h4 class="media-heading"><a href="#">But I've never been to the moon!</a></h4>
											<p class="post-date">may 10, 2014</p>
										</div>
									</div>
									<div class="media">
										<a class="pull-left" href="#"><img class="media-object" src="{{asset('blog/img/img1.jpg')}}" width="100" alt=""></a>
										<div class="media-body">
											<h4 class="media-heading"><a href="#">We don't have a brig</a></h4>
											<p class="post-date">september 27, 2014</p>
										</div>
									</div>
									<div class="media">
										<a class="pull-left" href="#"><img class="media-object" src="{{asset('blog/img/img3.jpg')}}" width="100" alt=""></a>
										<div class="media-body">
											<h4 class="media-heading"><a href="#">Every other day it's food, food, food.</a></h4>
											<p class="post-date">april 2, 2014</p>
										</div>
									</div>
									
								</div>
							</div>
						</div>

						<div class="paging clearfix">
							<a class="btn pull-left" href="#"><i class="icon-arrow-left2 left"></i><span>Older</span><span class="hidden-xs"> Posts</span></a>
							<a class="btn pull-right" href="#"><span>Newer</span><span class="hidden-xs"> Posts</span><i class="icon-arrow-right2 right"></i></a>
						</div>

					</div>	
				</div><!-- end row -->
			</div>

@stop