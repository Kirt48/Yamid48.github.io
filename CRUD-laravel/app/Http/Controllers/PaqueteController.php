<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    public function index()
    {
        return view('paquete.index');
        }
}
