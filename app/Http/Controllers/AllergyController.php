<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allergy;

class AllergyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allergies = Allergy::paginate();
        return view('allergies.index', compact('allergies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('allergies.create');
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
            'name' => 'required|unique:allergies|max:255',
            'category' => 'required|unique:allergies|max:255',
            'note' => 'required|unique:allergies|max:255',
            'diagnosed_at' => 'required|unique:allergies|'
            
        ]);
        $allergy = Allergy::create($validated);
        return view('allergies.show', compact('allergy'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allergy = Allergy::find($id);
        return view('allergies.show', compact('allergy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allergy = Allergy::findOrFail($id);
        return view('allergies.edit', compact('allergy'));
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
            'name' => 'required|max:255',
            'category' => 'required|max:255',
            'note' => 'required|max:255',
            'diagnosed_at'=> 'required'
            
            
        ]);

        $allergy = Allergy::findOrFail($id);
        $allergy->fill($validated);
        $allergy->save();

        return view('allergies.show', compact('allergy'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Allergy::destroy($id);

         /* povrat na index stranicu */
         return redirect()->route('allergies.index');
    }
}
