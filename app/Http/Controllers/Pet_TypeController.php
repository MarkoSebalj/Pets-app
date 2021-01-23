<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet_Type;

class Pet_TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pet_types = Pet_Type::paginate();
        return view('pet_types.index', compact('pet_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pet_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:pet_types|max:255'
            
            
        ]);
        $pet_type = Pet_Type::create($validated);
        return view('pet_types.show', compact('pet_type'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pet_type = Pet_Type::find($id);
        return view('pet_types.show', compact('pet_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pet_type = Pet_Type::findOrFail($id);
        return view('pet_types.edit', compact('pet_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255'
           
            
            
        ]);

        $pet_type = Pet_Type::findOrFail($id);
        $pet_type->fill($validated);
        $pet_type->save();

        return view('pet_types.show', compact('pet_type'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pet_Type::destroy($id);

         /* povrat na index stranicu */
         return redirect()->route('pet_types.index');
    }
}
