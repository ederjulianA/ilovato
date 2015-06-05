angular.module("CatApp",[])

.controller("categoriesController", function($scope,$http){
	
	$http.get("/api/categories")
	.success(function(data){
		$scope.cate = data;
		console.log($scope.cate);
		//$scope.loading = false;
	})
	.error(function(){
//		$scope.loading = false;
	});

	$http.get("/exito.json")
	.success(function(data){
		$scope.products = data;
		console.log($scope.products);
		//$scope.loading = false;
	})
	.error(function(){
//		$scope.loading = false;
	});
	$scope.addNew = function(){
		var categ = {
			catName :$scope.cateText,
			done:false
		}
		$scope.cate.cats.push(categ);
		
		$http.post("http://localhost:8000/newcatpost",categ)
		$scope.cateText = "";
	}


	$scope.addCat = function(){

		$scope.newCat = { name_cat: $scope.name_cat };
		$http.post("http://localhost:8000/newcatpost",newCat)
		
	.success(function(data,status,headers,config){
		alert("HOLA");
		console.log(data);
		$scope.cate.push(newCat);
		$scope.newCat = {};

	})
	.error(function(error,status,headers,config){

		console.log(error);
	});
	}
});