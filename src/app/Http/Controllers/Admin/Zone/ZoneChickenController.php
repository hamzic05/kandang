<?php

namespace App\Http\Controllers\Admin\Zone;
use App\Models\ZoneChicken;
use App\Models\Houses;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ZoneChickenController extends Controller
{
    public function index(){
        $zoneCount = Houses::count();
        $zoneChicken = ZoneChicken::with('houses')->get();
        return view("admin.zone.index", compact("zoneChicken", "zoneCount"));
    }
}
