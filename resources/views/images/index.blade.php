@extends('layouts.app')



@section('content')
<a href="{{ route('images.create') }}" class="btn btn-outline-dark mt-5">Add</a>

<div class="container">

<table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image Path</th>
      <th scope="col">Added At</th> 
      <th scope="col">Description</th>
<<<<<<< HEAD
      <th scope="col">Pet</th>
=======
      <th scope="col">Pet ID</th>
>>>>>>> 4017ae9f955567bc504ff91a2ad6eaf16c9b5629
      <th>Actions</th>     
     
    </tr>
  </thead>
  <tbody>
  @foreach ($images->items() as $image)
    <tr>
        <td>{{ $image->id }}</td>
        <td>{{ $image->image_path }}</td>
        <td>{{ $image->added_at }}</td>
        <td>{{ $image->description }}</td>
<<<<<<< HEAD
        <td>{{ $image->pet->name }}</td>
=======
        <td>{{ $image->pet_id }}</td>
>>>>>>> 4017ae9f955567bc504ff91a2ad6eaf16c9b5629
        <td>
          <a class="btn btn-outline-dark" href="{{ route('images.show' , ['image' => $image->id]) }}" role="button">Details</a>
          <a class="btn btn-outline-dark" href="{{ route('images.edit' , ['image' => $image->id]) }}" role="button">Edit</a>
        </td>
    @endforeach 
   
  </tbody>
</table>
@endsection

