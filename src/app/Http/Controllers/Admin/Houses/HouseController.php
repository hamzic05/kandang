<?php

namespace App\Http\Controllers\Admin\Houses;


use App\Http\Controllers\Controller;
use App\Models\Houses;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    //
    public function index(){
        $houses = Houses::all();
        $count = Houses::count();
        return view("admin.houses.index", compact('houses', 'count'));
    }
}
