@extends('layouts.app')


@section('content')

<div class="card">
        <div class="card-header">
            <h5>Edit Location</h5>
        </div>

        <div class="card-body">
    <form action="{{url('/locations/update/'.$location->id)}}" method="POST" enctype="multipart/form-data">
@csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-outline mb-3">
                        <label for="location_name" class="form-label modal-field-text">Location Name</label><span style="color: red">*</span>
                        <input type="text" id="location_name" name="location_name" class="form-control" value="{{$location->location_name}}">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline mb-3">
                        <label for="location_desc" class="form-label modal-field-text">Location Description</label><span style="color: red">*</span>
                        <input type="text" id="location_desc" name="location_desc" class="form-control" value="{{$location->location_desc}}">

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-outline mb-3">
                    <label for="role_id" class="form-label modal-field-text">Mark Locations</label><br><span >( Right click the selected portion to remove the section )</span>
                    <div id="map_canvas" style=" border: 2px solid #3872ac;width:100%!important;height:700px!important;"></div>
                    {{-- <div id="info"></div> --}}
                    <div class="form-group row">
                        <textarea name="geojson" id="geojson" class="form-control d-none" required="required">{{$location->location_bounds}}</textarea>
                    </div>
                </div>
                <div class="hstack gap-2 justify-content-end d-none" id="saveGeoJson">
                    <button type="button" class="btn btn-success">
                    Process Data
                    <i class="icon-database-check ml-1"></i></button>
                </div>
            </div>
        </div>
        {{-- <div class="hstack gap-2 justify-content-end">
            <button type="submit" class="btn  modal-submit" id="add-btn">Submit</button>
        </div> --}}

        <div class="hstack gap-2 justify-content-end d-none" id="saveAreaButton">
            <button type="submit" class="btn btn-primary">
            Save Area
            <i class="icon-database-insert ml-1"></i></button>
        </div>
    </form>

        <div class="card-footer">

        </div>

</div>


@push('scripts')


<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,drawing&key=AIzaSyAhRRYms1MPPttIhZnOrp0STpoFaL6dlaw"></script>

<script>
    "use strict";
var coordinates = [];
var GeoJSON = [];
    var geocoder;
var map;

function initialize() {
    map = new google.maps.Map(
    document.getElementById("map_canvas"), {
        center: new google.maps.LatLng(10.0093121,76.3119555),
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
            editable: true,
            zIndex: 1
        },
        polylineOptions: {
            editable: true
        }
    });
    // console.log(drawingManager)
    drawingManager.setMap(map)

     // on polygon draw complete, hide the submit button -> force to click on Export data button
     google.maps.event.addListener(drawingManager, 'polygoncomplete', function(polygon) {
            $('#saveGeoJson').removeClass('d-none');
            $('#saveAreaButton').addClass('d-none');
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
                $('#geojson').val(JSON.stringify(obj));
                setTimeout(function() {
                    $('#saveGeoJson').addClass('d-none');
                    $('#saveAreaButton').removeClass('d-none');
                }, 250);
            });
        })

        var savedData = {!! $location->location_bounds !!};

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
            map.data.addGeoJson(savedData);
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
                $('#saveGeoJson').removeClass('d-none');
                $('#saveAreaButton').addClass('d-none');
            }
        });

}
google.maps.event.addDomListener(window, "load", initialize);
</script>
<script>
    "use strict";
    var coordinates = [];
    var GeoJSON = [];

    // For place API look into this-> https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete
    function initMap() {
        const map = new google.maps.Map(document.getElementById("map_canvas"), {
            center: new google.maps.LatLng(10.0093121,76.3119555),//(22.344, 114.048),
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
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
                strokeWeight: 1.5,
                editable: true
            },
            polylineOptions: {
                editable: true
            }
        });
        drawingManager.setMap(map);

        // on polygon draw complete, hide the submit button -> force to click on Export data button
        google.maps.event.addListener(drawingManager, 'polygoncomplete', function(polygon) {
            $('#saveGeoJson').removeClass('d-none');
            $('#saveAreaButton').addClass('d-none');
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
                console.log("FINAL", obj)
                console.log(JSON.stringify(obj));
                $('textarea[name=geojson]').val(JSON.stringify(obj));
                setTimeout(function() {
                    $('#saveGeoJson').addClass('d-none');
                    $('#saveAreaButton').removeClass('d-none');
                }, 250);
            });
        })

        var savedData = {!! $location->location_bounds !!};

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
          map.data.addGeoJson(savedData);

        //data style
        map.data.setStyle({
            fillColor: 'green',
            strokeColor: 'green',
            strokeWeight: 1.5,
            editable: true
        });

        // Right click on polygon to delete it.
        map.data.addListener("rightclick", event => {
            var feature = event.feature;
            var areaName = event.feature.getProperty("name");
            // if (areaName == undefined) areaName = "New Area";
            var confirmDialog = confirm("Do you want to delete this area?");
            if (confirmDialog == true) {
                map.data.remove(feature);
                $('#saveGeoJson').removeClass('d-none');
                $('#saveAreaButton').addClass('d-none');
            }
        });
    }
</script>
@endpush
@endsection
