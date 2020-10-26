
<!doctype html>
<html lang="en">
		<head>
		  <title>Geolocation</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		  <link rel="shortcut icon" href="">
			<!-- Load Leaflet from CDN -->
			<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
			  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
			  crossorigin=""/>
			<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
			  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
			  crossorigin=""></script>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		  <script src="https://unpkg.com/esri-leaflet@2.5.1/dist/esri-leaflet.js"
    integrity="sha512-q7X96AASUF0hol5Ih7AeZpRF6smJS55lcvy+GLWzJfZN+31/BQ8cgNx2FGF+IQSA4z2jHwB20vml+drmooqzzQ=="
    crossorigin=""></script>

		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		   <!--Load Esri  leftlet from CDN---->
		  <script src="https://unpkg.com/esri-leaflet@2.0.8" ></script>
		  
		  <!--Load Esri  leftlet geocoder from CDN---->
		  <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.2.4/dist/esri-leaflet-geocoder.css" />
		  <script src="https://unpkg.com/esri-leaflet-geocoder@2.2.4" ></script>
	   
	  
	  
	  <!--Load leftlet from CDN---->
	  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
	  <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js" ></script>
	  
	  <!--Load Esri  leftlet from CDN---->
	  <script src="https://unpkg.com/esri-leaflet@2.0.8" ></script>
	  
	  <!--Load Esri  leftlet geocoder from CDN---->
	  <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.2.4/dist/esri-leaflet-geocoder.css" />
	  <script src="https://unpkg.com/esri-leaflet-geocoder@2.2.4" ></script>
	
</head>

	
<style>
 body { margin:0; padding:0; }
    #map { position: absolute; top:65px; bottom:0; right:0; left:0; }
 #basemaps-wrapper {
    position: absolute;
    top: 200px;
    right: 10px;
    z-index: 400;
    background: white;
    padding: 10px;
  }
  #basemaps {
    margin-bottom: 5px;
  }
	
</style>
<body>

<nav class="navbar navbar-inverse">

    <a class="navbar-brand" href="#"><select  id="data" class="browser-default custom-select custom-select-lg mb-3"> <option selected>select country</option></select></a>
    
    
        <a class="navbar-brand" href="#"></a><button type="button" class="btn btn-info btn-lg" data-toggle="modal" id="submit" data-target="#myModal">Country Data</button></a>
        <a class="navbar-brand" href="#"></a><button type="button" class="pure-button pure-button-primary"  id="pure">Get my location</button></a>
    </nav>
    <div  id="map"  ></div>
    <div id="basemaps-wrapper" class="leaflet-bar">
      <select id="basemaps">
        <option value="Topographic">Topographic</option>
        <option value="Streets">Streets</option>
        <option value="NationalGeographic">National Geographic</option>
        <option value="Oceans">Oceans</option>
        <option value="Gray">Gray</option>
        <option value="DarkGray">Dark Gray</option>
        <option value="Imagery">Imagery</option>
        <option value="ImageryClarity">Imagery (Clarity)</option>
        <option value="ImageryFirefly">Imagery (Firefly)</option>
        <option value="ShadedRelief">Shaded Relief</option>
        <option value="Physical">Physical</option>
      </select>
    
  </div>
  </div>
  <div id ="myModal"  class="modal">
		  <div class="modal-dialog">
		
			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
			
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<h4 class="modal-title">Country Information</h4>
			  </div>
			  <div class="modal-body">
				<div class="row">
  <table>
	

<tr><td id="country_flag"><img src="" alt=""  class="center"></td> </tr>
<tr><td id="name"></td></tr>								
<tr><td id="capital"></td></tr>								 
<tr><td id="regio"></td></tr>						  
<tr><td id="population"></td></tr>								
<tr><td id="currencies"></td></tr>
<tr><td id="languages"></td></tr>						
<tr><td id="lat"></td></tr>									
<tr><td id="name1"></td></tr>									  
<tr><td id="country"></td></tr>								
<tr><td id="main"></td></tr>	
<tr><td id="temprature"></td></tr>								  
<tr><td id="min"></td></tr>								
<tr><td id="max"></td></tr>							  
<tr><td id="humidity"></td>	</tr>							 
<tr><td id="wind"></td>	</tr>							
<tr><td id="weather"></td></tr>								  
<tr><td id="pressure"></td></tr>								
								
</table>				
</div>
</div>
</div>
 </div>
  </div> 	
  
     <script src="countries_larg.geo.json"></script>
     <script>
var map;
var streets = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});
var layerGroup;
window.onload = function(){
  loadMap();
}
  function loadMap(coords){
    
    baseMaps = {
        "Streets": streets,
       
    };
    
    
    map = L.map('map',{
        layers:[streets]
    }).setView([0, 0], 3)

  }  
  
  var map = L.map('map').setView([-33.87, 150.77], 10);
  var layer = L.esri.basemapLayer('Topographic').addTo(map);
  var layerLabels;
  function setBasemap (basemap) {
    if (layer) {
      map.removeLayer(layer);
    }

    layer = L.esri.basemapLayer(basemap);

    map.addLayer(layer);

    if (layerLabels) {
      map.removeLayer(layerLabels);
    }

    if (
      basemap === 'ShadedRelief' ||
      basemap === 'Oceans' ||
      basemap === 'Gray' ||
      basemap === 'DarkGray' ||
      basemap === 'Terrain'
    ) {
      layerLabels = L.esri.basemapLayer(basemap + 'Labels');
      map.addLayer(layerLabels);
    } else if (basemap.includes('Imagery')) {
      layerLabels = L.esri.basemapLayer('ImageryLabels');
      map.addLayer(layerLabels);
    }
  }

  document
    .querySelector('#basemaps')
    .addEventListener('change', function (e) {
      var basemap = e.target.value;
      setBasemap(basemap);
    });


var x = document.getElementById("data");
  x.addEventListener("change", function() {
    $('#data').click(function(){ 
  
const countryname = $('#data').val();

applyCountryBorder(countryname );




function applyCountryBorder( countryname) {
  if (layerGroup){
        map.removeLayer(layerGroup);
    }
  jQuery
    .ajax({
      type: "GET",
      dataType: "json",
      url:
        "https://nominatim.openstreetmap.org/search?country=" +
        countryname.trim() +
        "&polygon_geojson=1&format=json"
    })
    .then(function(data) {
      var bounds = new L.LatLngBounds([data[0].boundingbox[0],data[0].boundingbox[2]],[data[0].boundingbox[1],data[0].boundingbox[3]]);
          map.fitBounds(bounds)
          layerGroup = new L.LayerGroup();
        layerGroup.addTo(map);
        L.geoJSON(data[0].geojson, {
          color: "green",
        weight: 8,
        opacity: 1,
        fillOpacity: 0.0 
        }).addTo(layerGroup);
      });
  }


    });
  });
          
        
      
           
         

     </script>
<script type="application/javascript" src="lib/js/fore.js"></script>
<script type="application/javascript" src="lib/js/script.js"></script>
<script type="application/javascript" src="lib/js/fore.js"></script>
	<script type="application/javascript" src="lib/js/script.js"></script>
<script src="lib/js/app.js"></script>
<script src="lib/css/style2.css"></script>

  <script src="lib/js/app1.js"></script>
</body>
</html>

 
  


