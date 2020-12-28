<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet; 

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        
        $pets = Pet::with(['medical_condition'])->paginate();
=======
        $pets = Pet::paginate();
>>>>>>> 4017ae9f955567bc504ff91a2ad6eaf16c9b5629
        return view('pets.index', compact('pets'));
        
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
    public function store(Request $request)
    {
        //
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
<<<<<<< HEAD
        $visitation = $pet->visits()->paginate();
        return view('pets.show', compact('pet', 'visitation'));        
          
      
=======
        return view('pets.show', compact('pet'));
>>>>>>> 4017ae9f955567bc504ff91a2ad6eaf16c9b5629
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
