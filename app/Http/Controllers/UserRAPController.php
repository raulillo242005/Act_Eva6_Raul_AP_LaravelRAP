<?php

namespace App\Http\Controllers;
use App\Models\UserRAP;
use Illuminate\Http\Request;

class UserRAPController extends Controller
{
    
    // Mostrar todos los usuarios
    public function index()
    {
        $users = UserRAP::all();
        return view('users', compact('users'));
    }

    // Mostrar un usuario por ID
    public function show($id)
    {
        $user = UserRAP::findOrFail($id);
        return view('posts', compact('posts'));
    }
}


