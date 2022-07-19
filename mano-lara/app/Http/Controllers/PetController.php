<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Color;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Pet::all();
        return view('animal.index', ['animals' => $animals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $colors = Color::all();
        return view('animal.create', ['colors' => $colors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal = new Pet;

        $animal->name = $request->animal_name;

        $animal->color_id = $request->color_id;

        $animal->save();

        return redirect()->route('animals-index')->with('success', 'You are the best!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(int $animalId)
    {
        $animal = Pet::where('id', $animalId)->first();
        
        return view('animal.show', ['animal' => $animal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $animal)
    {
        $colors = Color::all();
        
        return view('animal.edit', [
            'animal' => $animal,
            'colors' => $colors
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Pet  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $animal)
    {
      
        $animal->name = $request->animal_name;

        $animal->color_id = $request->color_id;

        $animal->save();

        return redirect()->route('animals-index')->with('success', 'You are the best!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $animal)
    {
        $animal->delete();

        return redirect()->route('animals-index')->with('deleted', 'Animal is dead :(');
    }
}
