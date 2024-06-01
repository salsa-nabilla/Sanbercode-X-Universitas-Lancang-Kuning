<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casts = Cast::all();
        return view('casts.index', ["casts" => $casts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('casts.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=> 'required|min:5',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $casts = new Cast;
        $casts->nama = $request->nama;
        $casts->umur = $request->umur;
        $casts->bio = $request->bio;

        $casts->save();

        return redirect('/casts');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $casts = Cast::find($id);
        return view('casts.show', ["casts" => $casts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $casts = Cast::find($id);
        return view('casts.edit', ["casts" => $casts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=> 'required|min:5',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $casts = Cast::find($id);

        $casts->nama = $request['nama'];
        $casts->umur = $request['umur'];
        $casts->bio = $request['bio'];

        $casts->save();

        return redirect('/casts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $casts = Cast::find($id);

        $casts->delete();
        return redirect('/casts');
    }
}
