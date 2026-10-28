<?php

namespace App\Http\Controllers\Admin\Chickens;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChickenController extends Controller
{
    public function index()
    {
        return view ('admin.layouts.index');
    }
    //

  

    public function store (Request $request){
        
        // Logic to store chicken data
    }
}
