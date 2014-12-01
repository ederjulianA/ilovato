@extends('layout.admin')

@section('content')
		<div class="container">
				<div class="row">
						<div class="col-md-6">
							<h2> New Post</h2>
								{{ Form::open(['route'=>'addArticlePost','method'=>'POST','role'=>'form','files'=>true]) }}
								<div class="form-group">
									{{ Form::label('title',' Title for the new Article') }}
									{{ Form::text('title',null,['class'=>'form-control']) }}
									{{ $errors->first('title','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('slug',' Seo slug URL') }}
									{{ Form::text('slug',null,['class'=>'form-control']) }}
									{{ $errors->first('slug','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('teaser',' Articles teaser') }}
									{{ Form::text('teaser',null,['class'=>'form-control']) }}
									{{ $errors->first('teaser','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('meta_description',' Meta description for the article') }}
									{{ Form::text('meta_description',null,['class'=>'form-control']) }}
									{{ $errors->first('meta_description','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('category','Select the category') }}
									{{ Form::select('category_id', $categories,['class'=>'form-control']) }}
									{{ $errors->first('category_id','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('content',' Write your article here') }}
									{{ Form::textarea('content', null, array('class' => 'form-control textarea')) }}
									{{ $errors->first('content','<p class="alert alert-danger">:message</p>') }}
								</div>

								

								<div class="form-group">
									{{ Form::label('img',' Articles image') }}
									{{ Form::file('img', array('class' => 'form-control')) }}
									{{ Form::hidden('user_id', Auth::user()->id)}}
									{{ $errors->first('img','<p class="alert alert-danger">:message</p>') }}
								</div>

								<p>
									<input type="submit" class="btn btn-info" value="Created New Article">
								</p>

								{{ Form::close() }}
						</div>
				</div>
		</div>
@stop