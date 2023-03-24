 @include('common.header')
 @include('common.navbar')

 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
 <script
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0Y3USAdnSv9NR5HQkxaqGnPLJi4mmbtc&callback=initMap&libraries=&v=weekly"
     defer></script>
 <script>
var zoom_value = 15;
let map;
let image;
let shape;
let icon;

var last_location = "";
var total_distance = 0;



function distance(lat1, lon1, lat2, lon2, unit) {
    var radlat1 = Math.PI * lat1 / 180
    var radlat2 = Math.PI * lat2 / 180
    var theta = lon1 - lon2
    var radtheta = Math.PI * theta / 180
    var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
    dist = Math.acos(dist)
    dist = dist * 180 / Math.PI
    dist = dist * 60 * 1.1515
    if (unit == "K") {
        dist = dist * 1.609344
    }
    if (unit == "N") {
        dist = dist * 0.8684
    }
    return dist
}

function get_location(s_no) {

    var location_value = document.getElementById('location_data_hidden' + s_no).value;
    var bus_data_explode1 = location_value.split(",");
    var bus_location_focus_lat = bus_data_explode1[1];
    var bus_location_focus_long = bus_data_explode1[2];
    var detail = location_value;

    map = new google.maps.Map(document.getElementById("map"), {
        zoom: zoom_value,
        center: {
            lat: parseFloat(bus_location_focus_lat),
            lng: parseFloat(bus_location_focus_long)
        },
    });
    image = {
        url: access_link + "live_bus/bus_photo.png",
        size: new google.maps.Size(30, 85),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(0, 32),
    };
    shape = {
        coords: [1, 1, 1, 20, 18, 20, 18, 1],
        type: "poly",
    };
    var bus_data = detail;
    var bus_data_explode = bus_data.split(",");
    new google.maps.Marker({
        position: {
            lat: parseFloat(bus_data_explode[1]),
            lng: parseFloat(bus_data_explode[2])
        },
        map,
        icon: image,
        shape: shape,
        title: bus_data_explode[0],
        zIndex: parseFloat(bus_data_explode[3]),
    });
    set_location(s_no);

}
let flightPlanCoordinates = [];

function set_location(s_no) {
    var location_date = $("#location_date").val();
    var lat_old = 0;
    var long_old = 0;
    $.ajax({
        type: "POST",
        url: access_link + "live_bus/bus_location_route_location_ajax.php?s_no=" + s_no + "&location_date=" +
            location_date,
        success: function(detail) {
            if (detail != '') {
                var detail_explode = detail.split("|?|");
                var total_position = detail_explode.length;
                // flightPlanCoordinates = [];
                for (var dc = 0; dc < total_position - 1; dc++) {
                    var detail1 = detail_explode[dc + 1];
                    var bus_data_explode1 = detail1.split(",");
                    var bus_location_title = bus_data_explode1[0];
                    var bus_location_focus_lat = bus_data_explode1[1];
                    var bus_location_focus_long = bus_data_explode1[2];
                    if (lat_old == 0) {
                        lat_old = bus_location_focus_lat;
                        long_old = bus_location_focus_long;
                    } else {
                        total_distance = Number(total_distance) + Number(distance(Number(lat_old), Number(
                            long_old), Number(bus_location_focus_lat), Number(
                            bus_location_focus_long), "K"));
                        lat_old = bus_location_focus_lat;
                        long_old = bus_location_focus_long;
                        console.log("distance=" + total_distance);
                    }
                    var lat_long_info = {
                        'lat': Number(bus_location_focus_lat),
                        'lng': Number(bus_location_focus_long)
                    };
                    flightPlanCoordinates[dc] = lat_long_info;
                    if (dc == 1) {
                        var bus_location_focus_lat1 = bus_location_focus_lat;
                        var bus_location_focus_long1 = bus_location_focus_long;
                    }

                }
                if (total_distance < 0.1) {
                    zoom_value = 18;
                } else if (total_distance < 1) {
                    zoom_value = 17;
                } else if (total_distance < 2) {
                    zoom_value = 16;
                } else if (total_distance < 5) {
                    zoom_value = 15;
                } else if (total_distance < 10) {
                    zoom_value = 14;
                } else if (total_distance < 30) {
                    zoom_value = 13;
                } else if (total_distance < 100) {
                    zoom_value = 12;
                } else if (total_distance < 200) {
                    zoom_value = 11;
                } else {
                    zoom_value = 10;
                }

                map = new google.maps.Map(document.getElementById("map"), {
                    zoom: zoom_value,
                    center: {
                        lat: parseFloat(bus_location_focus_lat1),
                        lng: parseFloat(bus_location_focus_long1)
                    },
                });

                image = {
                    url: access_link + "live_bus/bus_photo.png",
                    size: new google.maps.Size(30, 85),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(0, 32),
                };
                shape = {
                    coords: [1, 1, 1, 20, 18, 20, 18, 1],
                    type: "poly",
                };


                new google.maps.Marker({
                    position: {
                        lat: parseFloat(bus_location_focus_lat),
                        lng: parseFloat(bus_location_focus_long)
                    },
                    map,
                    icon: image,
                    shape: shape,
                    title: bus_location_title,
                    zIndex: 1,
                });

                const flightPath = new google.maps.Polyline({
                    path: flightPlanCoordinates,
                    geodesic: true,
                    strokeColor: "#0000ff",
                    strokeOpacity: 1.0,
                    strokeWeight: 4,
                });
                flightPath.setMap(map);

            }
        }
    });

}

function initMap() {

}
 </script>
 <section class="content-header">
     <h1>
         Bus Location
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{url('live-bus')}}"><i class="fa fa-dashboard"></i>Live Bus</a></li>
         <li class="active">Bus Route Location</li>
     </ol>
 </section>
 <div class="box box-primary">
     <div class="box-header">
         <h5 class="box-title">Bus Location Service</h5>
     </div>
     <div class="box-body">
         <div class="col-md-12">
             <div class="col-md-3" style="padding:10px">
                 <div class="box box-primary">
                     <div class="box-header">
                         <h5 class="box-title">Bus List</h5>
                     </div>
                     <div class="box-body">
                         <div class="col-md-12">
                             <div class="form-group">
                                 <label>Location Date<font style="color:red"><b>*</b></font></label>
                                 <input type="date" name="location_date" value="2022-12-05" class="form-control"
                                     required>
                             </div>
                         </div>
                         <div class="col-md-12">
                             <div class="col-md-12">
                                 <input type="hidden" id="location_data_hidden3" value="BHARAT BENZ,,1">
                                 <center><button type="button" style="width:100%;margin:10px" class="btn btn-primary"
                                         Title="Bus Location Not Set" disabled onclick="get_location('3');"
                                         id="bus_id_3">BHARAT BENZ[MH19TS0001]<small></small></button></center>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-9" style="padding:10px">
                 <div class="box box-primary">
                     <div class="box-header">
                         <h5 class="box-title">Map</h5>
                     </div>
                     <div class="box-body">
                         <div class="col-md-12" id="map" style="height:500px">

                         </div>
                     </div>
                 </div>

                 @include('common.footer')