@extends('layout.admin')

@section('content')
	<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello!</h1>
        <p>Welcome to the iLoVaTo's admin panel. This panel it's very simple, here you can edit your post
            <a href="{{ URL::route('addArticle') }}" class="btn btn-success btn-lg">New Article</a>
         </p>
        <p>
        		 @if(Session::has('message'))

            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Message</strong> {{Session::get('message')}}
            </div>

            <!--<p class="mensajes-flash" style="" data-dismiss="alert"id="mensaje-flash"> {{Session::get('message-alert')}}
                
            </p>-->
        @endif
        </p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      	@foreach($articles as $article)
		        <div class="col-md-4">
		          <h2>{{ $article->title }}</h2>
		          <p>{{ $article->teaser }} </p>
		          <p><a class="btn btn-default" href="{{ URL::route('editPost', array('id'=>$article->id,'slug'=>$article->slug)) }}" role="button">View details &raquo;</a></p>
		        </div>
        @endforeach
      </div>

   

@stop