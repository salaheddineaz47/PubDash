<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\Auteur;
use App\Models\Categorie;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::with(['auteur', 'categories'])->orderBy('date', 'desc')->get();
        $auteurs = Auteur::withCount('publications')->get();
        $categories = Categorie::all();

        return view('layouts.master', compact('publications', 'auteurs', 'categories'));
    }
}
