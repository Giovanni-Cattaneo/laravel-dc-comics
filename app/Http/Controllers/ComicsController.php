<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('comics.index', ['comics' => Comics::orderByDesc('id')->paginate(8)]);
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
        $product = $request->all();

        $comic = new Comics();
        $comic->title = $product['title'];
        $comic->thumb = $product['thumb'];
        $comic->series = $product['series'];
        $comic->price = $product['price'];
        $comic->sale_date = $product['sale_date'];
        $comic->description = $product['description'];
        $comic->save();

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comics $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comics $comics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comics $comics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comics $comics)
    {
        //
    }
}
