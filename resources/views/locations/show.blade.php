@extends('layouts.app')


@section('content')

<div class="card">
        <div class="card-header">
            <h5>Add Location</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-outline mb-3">
                        <label for="location_name" class="form-label modal-field-text">Location Name</label>
                        <input type="text" id="location_name" name="location_name" class="form-control" placeholder="Location Name" value="{{$location->location_name}}" readonly>
                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline mb-3">
                        <label for="location_desc" class="form-label modal-field-text">Location Description</label>
                        <input type="text" id="location_desc" name="location_desc" class="form-control" placeholder="Location Description"  value="{{$location->location_desc}}" readonly>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-outline mb-3">
                    <label for="role_id" class="form-label modal-field-text">Mark Locations</label>
                    <div id="map_canvas" style=" border: 2px solid #3872ac;"></div>
                    <div id="info"></div>
                </div>
            </div>
        </div>
  

        <div class="card-footer">
        
        </div>
     
</div>

  <!-- 
   The `defer` attribute causes the callback to execute after the full HTML
   document has been parsed. For non-blocking uses, avoiding race conditions,
   and consistent behavior across browsers, consider loading using Promises
   with https://www.npmjs.com/package/@googlemaps/js-api-loader.
  -->
@push('scripts')

  {{-- <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&libraries=places&v=weekly"
    defer
  ></script> --}}


   
{{--     
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&libraries=places&v=weekly"
      defer
    ></script>
<script>
    "use strict";
    var coordinates = [];
    var GeoJSON = [];
    // For place API look into this-> https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete
    function initMap() {
        const map = new google.maps.Map(document.getElementById("areaMap"), {
             zoom: 12,//10,
            center: new google.maps.LatLng(10.0093121,76.3119555),//(22.344, 114.048),
            minZoom: 1,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            streetViewControl: false,
            fullscreenControl: true,
        });
        const drawingManager = new google.maps.drawing.DrawingManager({
            drawingMode: google.maps.drawing.OverlayType.POLYGON,
            drawingControl: true,
            drawingControlOptions: {
                position: google.maps.ControlPosition.TOP_RIGHT,
                drawingModes: [
                    google.maps.drawing.OverlayType.POLYGON,
                ]
            },
            polygonOptions: {
                fillOpacity: 0.40,
                draggable: false,
                geodesic: true,
                clickable: false,
                fillColor: 'green',
                strokeColor: 'green',
                strokeWeight: 1.5
            }
        });
        drawingManager.setMap(map);
    
        // on polygon draw complete, hide the submit button -> force to click on Export data button
        google.maps.event.addListener(drawingManager, 'polygoncomplete', function(polygon) {
            $('#saveGeoJson').removeClass('hidden');
            $('#saveAreaButton').addClass('hidden');
        });
    
        //take the polugon and add the data layer, and delete the polygon
        google.maps.event.addListener(drawingManager, 'overlaycomplete', function(event) {
            switch (event.type) {
                case google.maps.drawing.OverlayType.POLYGON:
                    if (event.overlay != null)
                        event.overlay.setMap(null);
                    map.data.add(new google.maps.Data.Feature({
                        geometry: new google.maps.Data.Polygon([event.overlay.getPath().getArray()])
                    }));
                    break;
            }
        });
    
        // get the final GeoJSON data - later store this in DB after stringify
        google.maps.event.addDomListener(document.getElementById('saveGeoJson'), 'click', function() {
            map.data.toGeoJson(function(obj) {
              console.log(obj);
                console.log("FINAL", obj)
                console.log(JSON.stringify(obj));
                $('textarea[name=geojson]').val(JSON.stringify(obj));
                setTimeout(function() {
                    $('#saveGeoJson').addClass('hidden');
                    $('#saveAreaButton').removeClass('hidden');
                }, 250);
            });
        })
    
    
        var bounds = new google.maps.LatLngBounds();
            google.maps.event.addListener(map.data, 'addfeature', function (e) {
                if (e.feature.getGeometry().getType() === 'Polygon') {
                    var polys = e.feature.getGeometry().getArray();
                    for (var i = 0; i < polys.length; i++) {
                        for (var j = 0; j < polys[i].getLength(); j++) {
                            bounds.extend(polys[i].getAt(j));
                        }
                    }
                    map.fitBounds(bounds);
                } else if (e.feature.getGeometry().getType() === 'MultiPolygon') {
                    var multi = e.feature.getGeometry().getArray();
                    for (var k = 0; k < multi.length; k++) {
                        var polys = multi[k].getArray();
                        for (var i = 0; i < polys.length; i++) {
                            for (var j = 0; j < polys[i].getLength(); j++) {
                                bounds.extend(polys[i].getAt(j));
                            }
                        }
                    }
                    map.fitBounds(bounds);
                }
            });
    
        //data style
        map.data.setStyle({
            fillColor: 'green',
            strokeColor: 'green',
            strokeWeight: 1.5
        });
    
        // Right click on polygon to delete it.
        map.data.addListener("rightclick", event => {
            var feature = event.feature;
            var areaName = event.feature.getProperty("name");
            // if (areaName == undefined) areaName = " area";
            var confirmDialog = confirm("Do you want to delete this area?");
            if (confirmDialog == true) {
                map.data.remove(feature);
                $('#saveGeoJson').removeClass('hidden');
                $('#saveAreaButton').addClass('hidden');
            }
        });
    }

  
</script> --}}
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,drawing&key=AIzaSyAhRRYms1MPPttIhZnOrp0STpoFaL6dlaw"></script>
<script>
    var geocoder;
var map;
var polygonArray = [];

function initialize() {
    map = new google.maps.Map(
    document.getElementById("map_canvas"), {
        center: new google.maps.LatLng(37.4419, -122.1419),
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var drawingManager = new google.maps.drawing.DrawingManager({
        drawingMode: google.maps.drawing.OverlayType.POLYGON,
        drawingControl: true,
        drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: [
            google.maps.drawing.OverlayType.MARKER,
            google.maps.drawing.OverlayType.CIRCLE,
            google.maps.drawing.OverlayType.POLYGON,
            google.maps.drawing.OverlayType.POLYLINE,
            google.maps.drawing.OverlayType.RECTANGLE]
        },
        markerOptions: {
            icon: 'images/car-icon.png'
        },
        circleOptions: {
            fillColor: '#ffff00',
            fillOpacity: 1,
            strokeWeight: 5,
            clickable: false,
            editable: true,
            zIndex: 1
        },
        polygonOptions: {
            fillColor: '#BCDCF9',
            fillOpacity: 0.5,
            strokeWeight: 2,
            strokeColor: '#57ACF9',
            clickable: false,
            editable: false,
            zIndex: 1
        }
    });
    console.log(drawingManager)
    drawingManager.setMap(map)

    google.maps.event.addListener(drawingManager, 'polygoncomplete', function (polygon) {
        document.getElementById('info').innerHTML += "polygon points:" + "<br>";
        for (var i = 0; i < polygon.getPath().getLength(); i++) {
            document.getElementById('info').innerHTML += polygon.getPath().getAt(i).toUrlValue(6) + "<br>";
        }
        polygonArray.push(polygon);
    });

}
google.maps.event.addDomListener(window, "load", initialize);
</script>
@endpush
@endsection