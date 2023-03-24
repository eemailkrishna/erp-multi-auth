<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveBusController extends Controller
{
    public function live_bus(){
        return view('live_bus.bus_tracking');
    }
    public function BusPasswordChange(){
        return view('live_bus.bus_password_change');
    }
    public function BusLocationCurrent(){
        return view('live_bus.bus_location_current');
    }
    public function BusLocationLive(){
        return view('live_bus.bus_location_live');
    }
    public function BusLocationRoute(){
        return view('live_bus.bus_location_route');
    }
}