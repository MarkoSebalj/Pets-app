<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veterinarian_Visit;

class Veterinarian_VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veterinarian_visits = Veterinarian_Visit::paginate();
        return view('veterinarian_visits.index', compact('veterinarian_visits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('veterinarian_visits.create');
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
            'name' => 'required|unique:veterinarian_visits|max:255',
            'price' => 'required|unique:veterinarian_visits',
            'note' => 'required|unique:veterinarian_visits',
            'appointment_at' => 'required|unique:veterinarian_visits'
            
            
        ]);
        $veterinarian_visit = Veterinarian_Visit::create($validated);
        return view('veterinarian_visits.show', compact('veterinarian_visit'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $veterinarian_visit = Veterinarian_Visit::find($id);
        return view('veterinarian_visits.show', compact('veterinarian_visit'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veterinarian_visit = Veterinarian_Visit::findOrFail($id);
        return view('veterinarian_visits.edit', compact('veterinarian_visit'));
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
            'price' => 'required',
            'note' => 'required',
            'appointment_at' => 'required' ]);

        $veterinarian_visit = Veterinarian_Visit::findOrFail($id);
        $veterinarian_visit->fill($validated);
        $veterinarian_visit->save();

        return view('veterinarian_visits.show', compact('veterinarian_visit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Veterinarian_Visit::destroy($id);

         /* povrat na index stranicu */
         return redirect()->route('veterinarian_visits.index');
    }
}
