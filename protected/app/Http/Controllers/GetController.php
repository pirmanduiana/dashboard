<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetController extends Controller
{

    public function visimisi(){
        return view("visimisi");
    }

    public function struktur(){
        return view('struktur');
    }

    public function badungkab(){
        $url = "https://badungkab.go.id";
        echo file_get_contents($url);
    }

    public function kominfo(){
        $url = "https://badungkab.go.id/instansi/diskominfo/";
        echo file_get_contents($url);
    }

    public function ppid(){
        $url = "https://badungkab.go.id";
        echo file_get_contents($url);
    }

    public function badungmap(){
        $url = "http://map.badungkab.go.id/";
        echo file_get_contents($url);
    }
}