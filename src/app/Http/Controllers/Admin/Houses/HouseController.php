<?php

namespace App\Http\Controllers\Admin\Houses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    //
    public function index(){
        $status_sidebar = "active";
        return view("admin.houses.index",compact("status_sidebar"));
    }
}
