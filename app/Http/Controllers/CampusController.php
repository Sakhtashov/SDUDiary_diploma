<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusController extends Controller
{
    public function showCampus(){
        return view('campus');
    }
}
