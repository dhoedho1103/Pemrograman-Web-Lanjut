<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller{
    public function index() {
    return 'Selamat Datang';
    }

    public function about(){
        return 'Achmad Ridla Shobriy | NIM 2141762070';
    }

    public function artticles(){
        return 'Halaman artikel dengan id';
    }
}


