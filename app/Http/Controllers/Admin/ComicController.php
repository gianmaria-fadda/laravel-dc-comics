<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::get();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:128',
            'description' => 'required|min:1|max:4096',
            'thumb' => 'nullable|max:2048|url',
            'price' => 'required|',
            'series' => 'required|min:3|max:64',
            'sale_date' => 'nullable|',
            'type' => 'required|min:3|max:32',
            'artists' => 'nullable|min:4|max:64',
            'writers' => 'nullable|min:4|max:64',
        ]);

        $data = $request->all();

        $comic = Comic::create($data);

        /*$comic = new Comic ();
        $comic->title = $data['title'];
        $comic->description = $data[ 'description'];
        $comic->thumb = $data ['thumb'];
        $priceNumber = floatval($data['price']);
        $comic->price = $priceNumber;
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data ['type'];
        $explodArtists = json_encode(',', $data['artists']);
        $jsonArtists = json_encode($explodArtists);
        $comic->artists = $jsonArtists;
        $correctWriters = str_replace(',', '|', $data['writers']);
        $comic->writers = $implodedWriters;
        $comic->save();*/

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic->update($data);
        
        /*$comic->title = $data['title'];
        $comic->description = $data[ 'description'];
        $comic->thumb = $data ['thumb'];
        $priceNumber = floatval($data['price']);
        $comic->price = $priceNumber;
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data ['type'];
        $explodArtists = json_encode($data['artists']);
        $jsonArtists = json_encode($explodArtists);
        $comic->artists = $jsonArtists;
        $correctWriters = str_replace(',', '|', $data['writers']);
        $comic->writers = $correctWriters;
        $comic->save();*/

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
