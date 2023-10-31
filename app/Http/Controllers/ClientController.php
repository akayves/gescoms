<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * cette methode affiche la page d'accueil de l'application
     */
    public function home(): View
    {
        return view('client.home');
    }
}
