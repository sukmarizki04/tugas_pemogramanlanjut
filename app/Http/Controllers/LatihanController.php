<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public  function index(){
        $data = "Data dari resource";
        return view('latihan1', ['data' => $data]);
    }

    public function routeprams(){
        $tambah = $nomor + 2;
        return view('training', ['nomor' => $nomor, 'tambah' => $tambah]);
    }
}
