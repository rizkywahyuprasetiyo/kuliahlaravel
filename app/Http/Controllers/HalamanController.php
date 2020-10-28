<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function halaman1()
    {
        return view("halaman/halaman1");
    }

    public function halaman2()
    {
        $nama = "Budi";
        return view("halaman/halaman2", ["nama" => $nama]);
    }

    public function halaman3()
    {
        return view("halaman/halaman3");
    }
}
