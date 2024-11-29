<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bibliotecacontroller extends Controller
{
    public function inicio()
    {
        return view('login.Login');
    }

    public function inicio2()
    {
        return view('biblioteca.inicio');
    }

    public function registro()
    {
        return view('login.registro');
    }
}
