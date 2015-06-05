$(document).ready(function(){
	//var id = $('#getEmp').val();
	//LoadProd(id);
	LoadEmp();
});

$(document).on('change','#getEmp',function(e){
	$('.contenedor').html('');
	var id = $('#getEmp').val();
	LoadProd(id);
});


function LoadEmp()
{
	$.ajax({

			url : "http://www.tiendo.co/api/getEmpresas",
			dataType: "json",
			type : "get",
			
			success : function(data){

				if(data.estado = 200)
				{
					

					for (var i in data.empresas){

						var opt = "<option value='"+data.empresas[i].id+"'>"+data.empresas[i].razon_social+"</option>";
						$('#getEmp').append(opt);	
						

					}
				}
				console.log(data);
				
			}

				


		});
}

//tiendo65285

function LoadProd(id)
{
	$.ajax({

			url : "http://www.tiendo.co/api/tienda/"+id,
			dataType: "json",
			type : "get",
			
			success : function(data){

				if(data.estado = 200)
				{
					var nombre = data.empresa.razon_social;
					$('#tienda-name').text(nombre);

					for (var i in data.productos){
							//console.log("dia:"+data.diasv[i].id);
							var Prec =  data.productos[i].precio_detal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
						
							var art = "<div class='art'> <h2>"+data.productos[i].producto_nombre+" </h2><br> <img src='http://www.tiendo.co/"+data.productos[i].imagen+"' width='300px' height='auto' > <p>$ "+Prec+"</p> <p><a class='btn-link' target='_blank' href='http://"+data.empresa.nombre_publico+".tiendo.co/_/producto/"+data.productos[i].slug+"'>Ver articulo en tiendo</a> </p> </div>";
							$('.contenedor').append(art);

					}
				}
				console.log(data);
				
			}

				


		});
}