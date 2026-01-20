<?php

namespace App\Http\Controllers;

use App\Models\PostRAP;
use Illuminate\Http\Request;

class PostRAPController extends Controller
{
    // Mostrar todos los posts en tabla HTML
    public function index()
    {
        // Cargar posts con los usuarios relacionados
        $posts = PostRAP::with('user')->get();

        // Enviar a la vista Blade
        return view('posts', compact('posts'));
    }
}
