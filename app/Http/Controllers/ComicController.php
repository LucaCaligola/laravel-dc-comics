<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Http\Controllers\Controller;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $comics = config('db.comic');
        $comics = Comic::all();
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
        $formData = $request->all();

        $newComic = Comic::create($formData);

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {

        // dd($comic);
        return view('comics.show', compact('comic'));    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => ['required', 'min:4', 'max:40'],
            'series' => ['required', 'min:1', 'max:30'],
            'price' => ['required', 'min:1', 'max:15'],
            'description' => ['required', 'min:10', 'max:2000'],
            'thumb' => ['required', 'min:4', 'url:http,https'],
            'sale_date' => ['required'],
            'type' => ['required', 'min:1', 'max:25'],
        ], [
            'title.required' => 'Non va bene, inserisci un titolo'
        ]);
        $data = $request->all();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
