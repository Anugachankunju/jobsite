<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        return view('Main.landing');
    }
    public function create(Request $request)
    {
        return view('Main.Register');
    }
}
