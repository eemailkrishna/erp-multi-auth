 @include('common.header')
 @include('common.navbar')

 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
 <script
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0Y3USAdnSv9NR5HQkxaqGnPLJi4mmbtc&callback=initMap&libraries=&v=weekly"
     defer></script>
 <script>
var zoom_value = 18;
let map;
let image;
let shape;

var last_location = "";

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
    setInterval(function() {
        set_location(s_no);
    }, 30000)
}

function set_location(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "live_bus/bus_location_live_ajax.php?s_no=" + s_no,
        success: function(detail) {
            if (detail != last_location) {
                last_location = detail;
                var bus_data_explode1 = detail.split(",");
                var bus_location_focus_lat = bus_data_explode1[1];
                var bus_location_focus_long = bus_data_explode1[2];
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
         <li class="active">Bus Live Location</li>
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