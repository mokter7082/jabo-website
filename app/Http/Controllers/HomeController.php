<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        return view('pages.main');
    }
    public function Services(){
        return view('pages.services');
    }
}
