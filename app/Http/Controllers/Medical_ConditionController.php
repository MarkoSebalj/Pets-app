<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medical_Condition;

class Medical_ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medical_conditions = Medical_Condition::paginate();
        return view('medical_conditions.index', compact('medical_conditions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medical_conditions.create');
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
            'name' => 'required|unique:medical_conditions|max:255',
            'severity' => 'required|unique:medical_conditions|max:255',
            'note' => 'required|unique:medical_conditions|max:255',
            'diagnosed_at' => 'required|unique:medical_conditions|'
            
            
        ]);
        $medical_condition = Medical_condition::create($validated);
        return view('medical_conditions.show', compact('medical_condition'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medical_condition = Medical_Condition::find($id);
        return view('medical_conditions.show', compact('medical_condition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medical_condition = Medical_Condition::findOrFail($id);
        return view('medical_conditions.edit', compact('medical_condition'));
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
            'name' => 'required|unique:medical_conditions|max:255',
            'severity' => 'required|unique:medical_conditions|max:255',
            'note' => 'required|unique:medical_conditions|max:255',
            'diagnosed_at' => 'required|unique:medical_conditions|'
           
            
            
        ]);

        $medical_condition = Medical_Condition::findOrFail($id);
        $medical_condition->fill($validated);
        $medical_condition->save();

        return view('medical_conditions.show', compact('medical_condition'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medical_Condition::destroy($id);

         /* povrat na index stranicu */
         return redirect()->route('medical_conditions.index');
    }
}
