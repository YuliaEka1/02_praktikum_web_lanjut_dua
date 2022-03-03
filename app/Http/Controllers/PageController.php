<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "2041720064 <br> Yulia Eka Ardhani <br> TI2C";
    }
    public function articles($id){
        return "Halaman Artikel dengan ID ".$id;
    }

    //
}
