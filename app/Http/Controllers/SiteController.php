<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('homepage', compact('movies'));
    }
}
