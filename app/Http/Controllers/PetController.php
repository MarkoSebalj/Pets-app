<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Medical_Condition; 

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $pets = Pet::with(['medical_condition'])->paginate();
        return view('pets.index', compact('pets'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pets.create');
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
            'name' => 'required|unique:images|max:255',
            'gender' => 'required|unique:images|',
            'breed' => 'required|unique:images|max:255',
            'born_at' => 'required|unique:images|',
            'medical_condition_id' => ' '
            
        ]);
        $pet = Pet::create($validated);
        return view('pets.show', compact('pet'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $pet = Pet::find($id);
        $visitation = $pet->visits()->paginate();
        return view('pets.show', compact('pet', 'visitation'));        
          
      
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pet = Pet::findOrFail($id);

        $medical_conditions = Medical_Condition::pluck('name', 'id');

        return view('pets.edit', compact('pet', 'medical_conditions')
        );
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
            'name' => 'required|unique:images|max:255',
            'gender' => 'required|unique:images|',
            'breed' => 'required|unique:images|max:255',
            'born_at' => 'required|unique:images|',
            'medical_condition_id' => ' '

            ]);

        $pet = Pet::findOrFail($id);
        $pet->fill($validated);
        $pet->save();

        return redirect()->route('pets.show', ['pet' => $pet->id]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
