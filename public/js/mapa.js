var container = document.getElementById('popup');
var content = document.getElementById('popup-content');
var closer = document.getElementById('popup-closer');

var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM({})
          })
        ],
        view: new ol.View({
          center: ol.proj.fromLonLat([-103.324943, 20.656914]),
          zoom: 16
    	})
}); 

var overlay = new ol.Overlay({
         element: container,
         autoPan: true,
         autoPanAnimation: {
             duration: 250
         }
     });

map.addOverlay(overlay);

map.on('singleclick', function (event) {
     if (map.hasFeatureAtPixel(event.pixel) === true) {
         var coordinate = event.coordinate;
         var feature = map.forEachFeatureAtPixel(event.pixel, function(feature, layer){
            return feature;
         })
         if(feature){
            var text = feature.get('name');
            content.innerHTML = text + ' ' + '<a class="nav-link" href="'+ route('local', {nombre: text}) +'">Ver menú</a>';
         }else{
            content.innerHTML = '';
         }
         overlay.setPosition(coordinate);
     } else {
         overlay.setPosition(undefined);
         closer.blur();
     }
    });

closer.onclick = function() {
         overlay.setPosition(undefined);
         closer.blur();
         return false;
     };

       var layer = new ol.layer.Vector({
        source: new ol.source.Vector({
        features: [
             new ol.Feature({
                 geometry: new ol.geom.Point(ol.proj.fromLonLat([-103.32513860296092, 20.655972318688896])),
                 name: 'El Globo'
             })
            ]
        }),
        style: new ol.style.Style({
            image: new ol.style.Circle({
            radius: 7,
            fill: new ol.style.Fill({color: 'black'}),
            stroke: new ol.style.Stroke({
            color: [255,0,0], width: 2
                })
            })
        })
    });

    var layer2 = new ol.layer.Vector({
        source: new ol.source.Vector({
        features: [
             new ol.Feature({
                 geometry: new ol.geom.Point(ol.proj.fromLonLat([-103.326596, 20.659051])),
                 name: 'El Brother'
             })
            ]
        }),
        style: new ol.style.Style({
            image: new ol.style.Circle({
            radius: 7,
            fill: new ol.style.Fill({color: 'black'}),
            stroke: new ol.style.Stroke({
            color: [255,0,0], width: 2
                })
            })
        })
    });

    var layer3 = new ol.layer.Vector({
        source: new ol.source.Vector({
        features: [
             new ol.Feature({
                 geometry: new ol.geom.Point(ol.proj.fromLonLat([-103.324918, 20.657369])),
                 name: 'Otro puesto'
             })
            ]
        }),
        style: new ol.style.Style({
            image: new ol.style.Circle({
            radius: 7,
            fill: new ol.style.Fill({color: 'black'}),
            stroke: new ol.style.Stroke({
            color: [255,0,0], width: 2
                })
            })
        })
    });

    map.addLayer(layer);
    map.addLayer(layer2);
    map.addLayer(layer3);