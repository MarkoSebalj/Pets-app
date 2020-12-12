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
      <th scope="col">Pet ID</th>
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
        <td>{{ $image->pet_id }}</td>
        <td>
          <a class="btn btn-outline-dark" href="{{ route('images.show' , ['image' => $image->id]) }}" role="button">Details</a>
          <a class="btn btn-outline-dark" href="{{ route('images.edit' , ['image' => $image->id]) }}" role="button">Edit</a>
        </td>
    @endforeach 
   
  </tbody>
</table>
@endsection

