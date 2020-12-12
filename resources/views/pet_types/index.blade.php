@extends('layouts.app')

@section('content')
<a href="{{ route('pet_types.create') }}" class="btn btn-outline-dark mt-5">Add</a>
<div class="container">
<table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th> 
      <th>Actions</th>     
     
    </tr>
  </thead>
  <tbody>
    @foreach ($pet_types->items() as $pet_type)
    <tr>
        <td>{{ $pet_type->id }}</td>
        <td>{{ $pet_type->name }}</td>
        <td>
          <a class="btn btn-outline-dark" href="{{ route('pet_types.show' , ['pet_type' => $pet_type->id]) }}" role="button">Details</a>
          <a class="btn btn-outline-dark" href="{{ route('pet_types.edit' , ['pet_type' => $pet_type->id]) }}" role="button">Edit</a>
        </td>
    @endforeach 
   
  </tbody>
</table>
@endsection