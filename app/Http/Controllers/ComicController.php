<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller

{
    public function getHome()
    {
        $comics = Comic::all();

        return view('pages.home', compact('comics'));
    }

    public function index()
    {
        $comics = Comic::all();
        return view('pages.comics', compact('comics'));
    }

    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('pages.show', compact('comic'));
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

        return redirect()->route('pages.comics');
    }

    public function create()
    {
        return view('pages.create');
    }

    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('pages.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        $comic->update($form_data);

        return redirect()->route('comics.index');
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
