<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index', ['nama' => 'Azola Zubizarreta']);
    }
    public function about()
    {
        $data = [
            'nama' => 'Dety Mei Dina Saputri'
        ];
        return view('about', $data);
    }
}
