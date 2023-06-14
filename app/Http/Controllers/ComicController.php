<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function getComic()
    {
        return view('pages.home');
    }
}
