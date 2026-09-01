<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hedd(){
        return view('site.hedd');
    }

    public function catarsequinze(){
        return view('site.catarsequinze');
    }

    public function catarsetrinta(){
        return view('site.catarsetrinta');
    }

    public function laioumevintecinco(){
        return view('site.laioumevintecinco');
    }

    public function laiodoisemeio(){
        return view('site.laiodoisemeio');
    }

    public function laiocinco(){
        return view('site.laiocinco');
    }

    public function rosadez(){
        return view('site.rosadez');
    }

    public function rosavinte(){
        return view('site.rosavinte');
    }
}
