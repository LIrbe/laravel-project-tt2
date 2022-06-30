<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModsController extends Controller
{
    public function create()
    {
        return view('mods.create');
    }
}
