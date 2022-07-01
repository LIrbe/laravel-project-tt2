<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModsController extends Controller
{
    public function create()
    {
        return view('mods.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'required',
        ]);

        auth()->user()->mods()->create($data);
        dd(request()->all());
    }
}
