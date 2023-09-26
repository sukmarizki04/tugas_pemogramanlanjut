<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function array()
    {

        $databuah =['Mobile Programming','Riset Teknologi Informasi',
        'Pemograman Lanjut A1','Kuliah Kerja Nyata','Tugas Akhir','Internet Of Think',];
        $nim = 200170101;
        $name = "Sukma Rizki";
        $jurusan = "Teknik Informatika";
        $program = "Informatika";
        $matkul = "Pemograman Lanjut A1";
        $totalbuah = count($databuah);
        return view('array',['buah' => $databuah, 'total' => $totalbuah, 
        'name' => $name, 'jurusan' => $jurusan, 'nim' => $nim, 'program' => $program, 'matkul' => $matkul]);
    }

    public function datadiri(){
        
        $jurusan = "Teknik Informatika";
        return view('datadiri',['jurusan' => $jurusan,]);
    }
}
