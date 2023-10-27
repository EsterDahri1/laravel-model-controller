<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome', ['movies' => Movie::orderByDesc('id')->limit(4)->get()]);
    }

    public function movies()
    {
        return view('pages.Movie', ['movies' => Movie::all()]);
    }
}
