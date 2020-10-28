<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hai()
    {
        return "Hai view - Route - Controller";
    }

    public function sapadata()
    {
        $anda = "Jukardi";
        $lulusan = "Pend. Kimia";
        return view('sapa', ['nama' => $anda, 'prodi' => $lulusan]);
        // return "Hai View - Route - Controller";
    }

    public function produk($id)
    {
        return "No Produk : " . $id;
    }
}
