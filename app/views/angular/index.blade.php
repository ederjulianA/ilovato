<!DOCTYPE html>
<html ng-app="EderApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
	<link rel="stylesheet" href="{{asset('blog/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('blog/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('blog/css/icons.css')}}">
		<link rel="stylesheet" href="{{asset('blog/css/animate.min.css')}}">
		<style type="text/css">
			.animated{
				opacity: 1;
				max-height: auto;
				overflow: hidden;
				transition: all 3s;
			}
			.animated.ng-hide{
				opacity: 0;
				max-height: 0px !important;
				display: block !important;
			}
		</style>
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body ng-controller="FirstController">


<div>

	<h3>Cate</h3>
	<ul>
		<li ng-repeat="cat in cats">@{{cat.name}}</li>
	</ul>

	<inpu type="text" ng-model="nCat.name">
	<button type="" ng-click="addC()">Add</button>
</div>


<div ng-show="loading">Cargando...</div>
<div ng-show="!loading && posts.lenght <= 0">No se encontraron resultados</div>
<ul ng-show="posts.lenght != 0" class="animated">
	<li ng-repeat="post in posts">
		<h2>@{{post.title}}</h2>
		<p>@{{post.body}}</p>
	</li>
</ul>

<input type="text" ng-model="nuevoComentario.comentario"><br>

<input type="text" ng-model="nuevoComentario.username">
<br>
<button ng-click="agregarComentario()">Agregar Comentario</button>
<h3>Cmentarios</h3>
<ul>
	<li ng-repeat="comentario in comentarios">
		@{{comentario.comentario}}-<strong>@{{comentario.username}}</strong>
	</li>
</ul>
@{{"hola"+nombre}}
<hr>
	<div ng-controller="FiltersController">
		@{{ mi_html | removeHtml}}
		<p>
			<h2>@{{apellido}}</h2>
			@{{costo | currency}}
		</p>
		<p>
			<button type="" id="btnC"> Haz click</button>
		</p>
		
	</div>
		
<hr>
<input type="text" ng-model="newPost.title"><br>
<textarea ng-model="newPost.body"></textarea>
<br>
<button type="" ng-click="addPost()">Enviar</button>


	

<script type="text/javascript" src="{{asset('blog/js/jquery-1.9.1.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/placeholders.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/wow.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/custom.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/ga.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/time.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/ang.js')}}"></script>
		<!--<script type="text/javascript" src="{{asset('blog/js/controller.js')}}"></script>-->
		<script type="text/javascript" src="{{asset('blog/js/jquery.timeago.js')}}"></script>

</body>
</html>