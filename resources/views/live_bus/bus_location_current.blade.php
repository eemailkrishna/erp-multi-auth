@include('common.header')
@include('common.navbar')

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0Y3USAdnSv9NR5HQkxaqGnPLJi4mmbtc&callback=initMap&libraries=&v=weekly"
    defer></script>
<script>
function get_location(location_value) {
    if (location_value == 'All') {
        var bus_location_focus_lat = document.getElementById('bus_location_focus_lat').value;
        var bus_location_focus_long = document.getElementById('bus_location_focus_long').value;
        var detail = document.getElementById('bus_location_data').value;
        var zoom_value = parseFloat(document.getElementById('map_zoom').value);


    } else {
        var location_value = document.getElementById('location_data_hidden' + location_value).value;
        var bus_data_explode1 = location_value.split(",");
        var bus_location_focus_lat = bus_data_explode1[1];
        var bus_location_focus_long = bus_data_explode1[2];
        var detail = location_value;
        var zoom_value = 18;
    }
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: zoom_value,
        center: {
            lat: parseFloat(bus_location_focus_lat),
            lng: parseFloat(bus_location_focus_long)
        },
    });
    const image = {
        url: access_link + "live_bus/bus_photo.png",
        size: new google.maps.Size(30, 85),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(0, 32),
    };
    const shape = {
        coords: [1, 1, 1, 20, 18, 20, 18, 1],
        type: "poly",
    };
    var bus_location_explode = detail.split("|?|");
    for (let i = 1; i < bus_location_explode.length; i++) {

        var bus_data = bus_location_explode[i];
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

function initMap() {
    /*
      const beachMarker = new google.maps.Marker({
        position: { lat: -33.89, lng: 151.274 },
        map,
        icon: image,
      });
      */
}
</script>

<section class="content-header">
    <h1>
        Bus Location
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('live-bus')}}"><i class="fa fa-dashboard"></i>Live Bus</a></li>
        <li class="active">Bus Password Update</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-success " style="padding:10px 10px 10px 10px;">
                <div class="box-header with-border ">
                    <h3 class="box-title" style="color:teal;">Bus List</h3>

                </div>
                <div class="col-md-3" style="padding:10px">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h5 class="box-title">Bus List</h5>
                        </div>
                        <div class="box-body">
                            <div class="col-md-12">
                                <center><button type="button" style="width:100%;margin:10px" class="btn btn-success"
                                        onclick="get_location('All');">All Bus</button></center>
                            </div>

                            <div class="col-md-12">
                                <input type="hidden" id="location_data_hidden3" value="|?|BHARAT BENZ,,1">
                                <center><button type="button" style="width:100%;margin:10px" class="btn btn-primary"
                                        Title="Bus Location Not Set" disabled onclick="get_location('3');"
                                        id="bus_id_3">BHARAT BENZ[MH19TS0001]<small></small></button></center>
                            </div>


                            <input type='hidden' value="|?|BHARAT BENZ,,1" id="bus_location_data">
                            <input type='hidden' value="NAN" id="bus_location_focus_lat">
                            <input type='hidden' value="NAN" id="bus_location_focus_long">
                            <input type='hidden' value="18" id="map_zoom">
                            <input type='hidden' value="0" id="lat_long_diff">
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