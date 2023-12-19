<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class InfoController extends Controller
{
    function infoMhs($kd): View
    {
        return view('info', ['progdi' => $kd]);
    }
}
