<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = \App\Models\User::findorFail($user);
        return view('profile.profile', [
            'user' => $user, 
        ]);
    }
}

