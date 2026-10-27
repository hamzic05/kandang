<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChickenController extends Controller
{
    public function index()
    {
        return "Hello, World!";
    }
    //

    public function listdata(){
        return view("");
    }

    public function store (Request $request){
        
        // Logic to store chicken data
    }
}
