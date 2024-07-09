<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FenipController extends Controller
{
    public function home(){
        return view("Principal.home");
    }
}
