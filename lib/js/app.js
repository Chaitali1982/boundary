
$(document).ready(function(){

$(function(){	
    var countryOptions;
$.ajax({
            url: "lib/php/getCountryData.php",
            type: 'POST',
            dataType: 'json',
           
            success: function(result) {
    
             
              if(result.data.length){
                  for(var i= 0;i<result.data.length;i++){
                    countryOptions+="<option value='"
                    +result.data[i].name+
                    "'>"
                    +result.data[i].name+
                    "</option>";
                     }
                     $('#data').html(countryOptions);
                    }
		
                 
             
  
               
              
            }
           
            });
        });


        var map = L.map('map').setView([37.8, -96], 4);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
          maxZoom: 18,
          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
          id: 'mapbox/light-v9',
          tileSize: 512,
          zoomOffset: -1
        }).addTo(map);
        function style(feature) {
          return {
              fillColor: getColor(feature.properties.density),
              weight: 2,
              opacity: 1,
              color: 'white',
              dashArray: '3',
              fillOpacity: 0.7
          };
      }
      
      L.geoJson(statesData, {style: style}).addTo(map);      



















      });
        
    
   
