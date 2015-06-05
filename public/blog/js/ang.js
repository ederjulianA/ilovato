var app = angular.module("EderApp",[]);
app.filter("removeHtml",function(){
	return function(texto){
		return String(texto).replace(/<[^>]+>/gm,'');
	}
});

app.controller("FiltersController", function($scope){
	
	$scope.mi_html = "<p>Hola Mundo</p>";

	$scope.costo = 2000;
	$scope.apellido = "Demi";

	/*setTimeout(function(){
		$scope.$apply(function(){
			$scope.apellido = "Lovato";
		});
	},2000);*/
	
	document.querySelector("#btnC").addEventListener("click",function(){
		$scope.$apply(function(){
			$scope.apellido= "Lovato sexy";
		});
	});
});






	
app.controller("FirstController", function($scope,$http){

	$scope.posts = [];


	$console.newC = {};
				//eebrbrbrbgr
					$scope.addC = function(){
		$http.post("http://localhost:8000/newcatpost",{
		name : $scope.nCat.name
		
	})
	.success(function(data,status,headers,config){
		console.log(data);
		$scope.cats.push($scope.newC);
		$scope.newC = {};
	})
	.error(function(error,status,headers,config){

		console.log(error);
	});
	}

	$scope.newPost = {};
	$scope.loading = true;
	$http.get("http://jsonplaceholder.typicode.com/posts")
	.success(function(data){
		$scope.posts = data;
		console.log(data);
		$scope.loading = false;
	})
	.error(function(){
		$scope.loading = false;
	});
	$scope.addPost = function(){
		$http.post("http://jsonplaceholder.typicode.com/posts",{
		title : $scope.newPost.title,
		body  : $scope.newPost.body,
		userId: 1
	})
	.success(function(data,status,headers,config){
		console.log(data);
		$scope.posts.push($scope.newPost);
		$scope.newPost = {};
	})
	.error(function(error,status,headers,config){

		console.log(error);
	});
	}


	$scope.nombre = "Eder";
	$scope.nuevoComentario = {};
	$scope.comentarios = [
		{
			comentario: "Comentario 1",
			username   : "Eder"
		},
		{
			comentario: "Comentario 2",
			username   : "demi"
		}

	];
	$scope.agregarComentario = function(){
			$scope.comentarios.push($scope.nuevoComentario);
			$scope.nuevoComentario = {};
	}
});

