<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Pet;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::with(['pet'])->paginate();
        return view('images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images.create');
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
            'image_path' => 'required|unique:images|max:255',
            'added_at' => 'required|unique:images|',
            'Description' => 'required|unique:images|max:255',
            'pet_id' => ' '
            
        ]);
        $image = Image::create($validated);
        return view('images.show', compact('image'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $image = Image::with(['pet'])
            ->findOrFail($id);
        return view('images.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Image::findOrFail($id);

        $pets = Pet::pluck('name', 'id');

        return view('images.edit',
            compact('image', 'pets')
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
            'image_path' => 'required|unique:allergies|max:255',
            'added_at' => 'required|unique:allergies|',
            'Description' => 'required|unique:allergies|max:255',
            'pet_id' => ' '
            
        ]);

        $image = Image::findOrFail($id);
        $image->fill($validated);
        $image->save();

        return redirect()->route('images.show', ['image' => $image->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* Brisanje korisnika iz baze*/
        User::destroy($id);

        /* povrat na index stranicu */
        return redirect()->route('users.index');
    }
}
