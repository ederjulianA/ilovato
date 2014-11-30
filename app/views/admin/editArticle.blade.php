@extends('layout.admin')

@section('content')
	<div class="container container-fluid">
		<div class="row">
				<h1>editting article: {{ $article->title }}</h1>
		</div>
		<div class="row">
			<form role="form" method="post" action="{{ URL::route('postEditArticle') }}">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control"name="title" id="title" placeholder="" value="{{ $article->title}}">
  </div>
  <div class="form-group">
    <label for="slug">Seo url slug</label>
    <input type="slug" class="form-control"name="slug" id="slug" placeholder="" value="{{ $article->slug}}">
  </div>
  <div class="form-group">
    <label for="teaser">Teaser</label>
    <input type="text" class="form-control" id="teaser" name="teaser" placeholder="" value="{{ $article->teaser}}">
  </div>

  <div class="form-group">
      {{ Form::label('category','Select the category') }}
                  {{ Form::select('category', $categories, $article->category_id,['class'=>'form-control']) }}
                  

  </div

   <div class="form-group">
    <label for="meta-description">Meta Description</label>
    <input type="text" class="form-control" id="meta-description"name ="meta_description" placeholder="" value="{{ $article->meta_description}}">
  </div>

   <div class="form-group">
    <label for="teaser">Content</label>
   <textarea class="textarea"name="content" placeholder="" style="width: 80%; height: 200px">{{ $article->content }}</textarea>
  </div>
  <input type="hidden" name="id_post"  value="{{ $article->id }}">
 {{ Form::token() }}
  <button type="submit" class="btn btn-default">Submit</button>
</form>
		</div>
	</div>
@stop