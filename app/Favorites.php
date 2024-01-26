<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorites;
use Auth;

class FavoritesController extends Controller
{
    public function index()
    {
        // Obtener el ID del usuario autenticado
        $userId = Auth::id();

        // Buscar todos los favoritos del usuario logueado
        $favorites = Favorites::where('user_id', $userId)->get();
        
        return view('profile.index', compact('favorites'));

    }
}
