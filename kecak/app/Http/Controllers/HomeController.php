<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('frontpage.landingpage', ['title' => "Landing Page"]);
    }
    function kalender(){
        return view('kalender.kalenders', ['title' => "Kalender Page"]);
    }
    function cart(){
        return view('cart.cart', ['title' => "cart page"]);
    }
     function namafungsi(){
        return view('namafolder.file', ['title' => "nama tilte"]);
    }
}
