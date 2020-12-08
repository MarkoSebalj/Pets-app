@extends('layouts.app')



@section('content')
<div class="container">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image Path</th>
      <th scope="col">Added At</th> 
      <th scope="col">Description</th>
      <th scope="col">Pet ID</th>     
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
    @endforeach 
   
  </tbody>
</table>
@endsection

