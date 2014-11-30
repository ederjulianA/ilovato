<!--<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function myIP(){
$("#btn").click(function(){

            var geocoder =  new google.maps.Geocoder();
    geocoder.geocode( { 'address': $('#city').val()}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            $('.push-down').text("location : " + results[0].geometry.location.lat() + " " +results[0].geometry.location.lng()); 
          } else {
            $('.push-down').text("Something got wrong " + status);
          }
        });
});
}
 </script>
  <style>
    .push-down {margin-top: 25px;}</style>
</head>
<body onload="myIP()">
<input type="text" id= "city">
<input id="btn" type="button" value="get Lat&Long" />
  <div class="push-down"></div>
</body>
</html>-->
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Geocoding service</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      #panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <script type="text/javascript">
      jQuery(document).ready(function(){
     //obtenemos los valores en caso de tenerlos en un formulario ya guardado en la base de datos
     lat = jQuery('#lat').val();
     lng = jQuery('#long').val();
     //Asignamos al evento click del boton la funcion codeAddress
     jQuery('#pasar').click(function(){
        codeAddress();
        return false;
     });
     //Inicializamos la función de google maps una vez el DOM este cargado
    initialize();
});
     
    function initialize() {
     
      geocoder = new google.maps.Geocoder();
        
       //Si hay valores creamos un objeto Latlng
       if(lat !='' && lng != '')
      {
         var latLng = new google.maps.LatLng(lat,lng);
      }
      else
      {
        //Si no creamos el objeto con una latitud cualquiera como la de Mar del Plata, Argentina por ej
         var latLng = new google.maps.LatLng(37.0625,-95.677068);
      }
      //Definimos algunas opciones del mapa a crear
       var myOptions = {
          center: latLng,//centro del mapa
          zoom: 15,//zoom del mapa
          mapTypeId: google.maps.MapTypeId.ROADMAP //tipo de mapa, carretera, híbrido,etc
        };
        //creamos el mapa con las opciones anteriores y le pasamos el elemento div
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
         
        //creamos el marcador en el mapa
        marker = new google.maps.Marker({
            map: map,//el mapa creado en el paso anterior
            position: latLng,//objeto con latitud y longitud
            draggable: true, //que el marcador se pueda arrastrar
            title: 'Hello World!'

        });
        
       //función que actualiza los input del formulario con las nuevas latitudes
       //Estos campos suelen ser hidden
        updatePosition(latLng);


               
         
    }



     
    //funcion que traduce la direccion en coordenadas
    function codeAddress() {
         
        //obtengo la direccion del formulario
        var address = document.getElementById("direccion").value;
        //hago la llamada al geodecoder
        geocoder.geocode( { 'address': address}, function(results, status) {
         
        //si el estado de la llamado es OK
        if (status == google.maps.GeocoderStatus.OK) {
            //centro el mapa en las coordenadas obtenidas
            map.setCenter(results[0].geometry.location);
            //coloco el marcador en dichas coordenadas
            marker.setPosition(results[0].geometry.location);
            //actualizo el formulario     
            updatePosition(results[0].geometry.location);
             
            //Añado un listener para cuando el markador se termine de arrastrar
            //actualize el formulario con las nuevas coordenadas
            google.maps.event.addListener(marker, 'dragend', function(){
                updatePosition(marker.getPosition());
            });
      } else {
          //si no es OK devuelvo error
          alert("No podemos encontrar la direcci&oacute;n, error: " + status);
      }
    });
  }
   
  //funcion que simplemente actualiza los campos del formulario
  function updatePosition(latLng)
  {
       
       jQuery('#lat').val(latLng.lat());
       jQuery('#long').val(latLng.lng());
   
  }
    </script>
    <!--<script>
var geocoder;
var map;
function initialize() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(7.13012, -73.12046800000002);
  var mapOptions = {
    zoom: 8,
    center: latlng
  }
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
}

function codeAddress() {
  var address = document.getElementById('address').value;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>-->
  </head>
  <body>
    <form id="google" name="google" action="#">
 
<label>Direcci&oacute;n</label>
<input type="text" id="direccion" name="direccion" value="Luro 1200, Mar del Plata, Buenos Aires, Argentina"/>
<button id="pasar">Pasar al mapa</button>
 
<!-- div donde se dibuja el mapa-->
<div id="map_canvas" style="width:450px;height:300px;"></div>
 
<!--campos ocultos donde guardamos los datos-->
<input type="hidden" name="lat" id="lat"/>
<input type="hidden" name="lng" id="long"/>
</form>
  </body>
</html>