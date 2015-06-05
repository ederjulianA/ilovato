<!DOCTYPE html>
<html>
<head>
	<title>Store Ilovato</title>
	<script type="text/javascript" src="{{asset('blog/js/jquery-1.9.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('blog/js/api.js')}}"></script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			border: 0;
			font-size: 1em;
		}
		header {
			max-width: 100%;
			padding: 10px;
			width: 100%;
			border-bottom: 2px solid #999;
		}
		.contenedor{
			max-width: 100%;
			width: 90%;
			margin: 0 auto;
		}
		.art{
			border : 2px 0 solid #666;
			border-radius: 5px;
			display: inline-block;
			width: 25%;
			vertical-align: top;
			text-align: center;	
		}
		.art h2 {
			font-weight: bold;
			font-size: 1.5em;
		}
	</style>
</head>
<body>
	<header>
		<h1>Store <span id="tienda-name"></span></h1>

		<hr>
		Por favor escoge una empresa para ver su catalogo:
		<select id="getEmp">
			<option>Escoge Una empresa</option>

			
		</select>
	</header>
	
	<div class="contenedor">
		

		
	</div>

</body>
</html>