<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planta;

class main extends Controller
{
    public function index()
    {
        $plantas = Planta::all();
        return view('welcome', ['plantas'=>$plantas]);
    }
}
