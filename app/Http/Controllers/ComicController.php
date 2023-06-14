<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{

    public function index()
    {
        $comics = Comic::all();
        return view('pages.comics', compact('comics'));
    }

    public function show($id)
    {
        $comic = Comic::find($id);
        return view('pages.store', compact('comic'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->save();

        return redirect()->route('pages.store', $newComic->id);
    }
}
