<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')



@section('content')
<a href="{{ route('pets.create') }}" class="btn btn-outline-dark mt-5">Add</a>
<div class="container">

<table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th> 
      <th scope="col">Breed</th>
      <th scope="col">Born At</th>
      <th scope="col">Medical Condition</th>
      <th>Actions</th>     
    </tr>
  </thead>
  <tbody>
    @foreach ($pets->items() as $pet)
    <tr>
        <td>{{ $pet->id }}</td>
        <td>{{ $pet->name }}</td>
        <td>{{ $pet->gender }}</td>
        <td>{{ $pet->breed }}</td>
        <td>{{ $pet->born_at }}</td>
        <td>{{ $pet->medical_condition->name }}</td>
        <td>
          <a class="btn btn-outline-dark" href="{{ route('pets.show' , ['pet' => $pet->id]) }}" role="button">Details</a>
          <a class="btn btn-outline-dark" href="{{ route('pets.edit' , ['pet' => $pet->id]) }}" role="button">Edit</a>
        </td>
    @endforeach 
   
  </tbody>
</table>
@endsection


