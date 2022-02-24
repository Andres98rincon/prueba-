<?php

namespace App\Http\Controllers;

use App\Http\Requests\petrequest;
use App\Models\pet;
use App\Models\species;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = pet::all();
        $species = species::all();
        return view('pets.create', compact(['pets', 'species']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(petrequest $request)
    {
        $pets = $request->all();
        if ($request->hasfile('photo')) {
            $pets['photo'] = $request->file('photo')->store('uploads', 'public');
            pet::create($pets);
        }
        return redirect('home')->with('guardar','e');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(pet $pet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(pet $pet)
    {
        $species = species::all();
        $date = new DateTime($pet->born_date);
        $pet->born_date = $date->format('Y-m-d');
        return view('pets.edit', compact(['pet', 'species']))->with('editar','r');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $new = $request->all();
        if ($request->hasfile('photo')) {
            $pets = pet::FindOrFail($id);
            Storage::delete('public/' . $pets->photo);
            $new['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $pets = pet::FindOrFail($id);
        $pets->fill($new)->save();
        return redirect('home')->with('editar_producto', 'e');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pet::destroy($id);
        return redirect('home')->with('borrar','b');
    }
}
