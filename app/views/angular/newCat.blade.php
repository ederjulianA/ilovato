<!DOCTYPE html>
<html  ng-app="CatApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
	<link rel="stylesheet" href="{{asset('blog/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('blog/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('blog/css/icons.css')}}">
		<link rel="stylesheet" href="{{asset('blog/css/animate.min.css')}}">
		<style type="text/css" media="screen">
			body { padding-top: 70px; }
		</style>
	<title>Pruebas angular</title>
	<link rel="stylesheet" href="">
</head>
<body ng-controller="categoriesController">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    
  </div>
</nav>

<div class="jumbotron">
	<div class="row" >
		<div class="col-md-4" >
			<h2>Categorias </h2>
			  <p>
			  	<ul class="list-group">
			  		<li class="list-group-item" ng-repeat="cat in cate">@{{cat.cat_name}} </li>
			  	</ul>
			  </p>

			  <p>
			  	<!--<input type="text" ng-model="cateText"><br>
			  <a class="btn btn-primary btn-lg" href="#" role="button" ng-click="addNew()">Add Category</a></p>-->
			  <form ng-submit="addCat()" accept-charset="utf-8">
			  	<input type="text" ng-model="name_cat">
			  	<p>@{{name_cat}}</p>
			  	<button type="submit" class="btn btn-primary">Add new</button>
			  </form>
		</div>
	</div>
  
</div>

<div class="row">
	<div class="col-md-10">
		<ul>
			<li></li>
		</ul>
	</div>
	
</div>
	


	<script type="text/javascript" src="{{asset('blog/js/jquery-1.9.1.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/placeholders.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/wow.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/custom.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/ga.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/time.js')}}"></script>
		<!--<script type="text/javascript" src="{{asset('blog/js/ang.js')}}"></script>-->
		<script type="text/javascript" src="{{asset('blog/js/controller.js')}}"></script>
		<script type="text/javascript" src="{{asset('blog/js/jquery.timeago.js')}}"></script>
</body>
</html>