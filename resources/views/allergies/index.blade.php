@extends('layouts.app')



@section('content')
<div class="container">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th> 
      <th scope="col">Note</th>
      <th scope="col">Diagnosed At</th>
      <th>Actions</th>    
    </tr>
  </thead>
  <tbody>
    @foreach ($allergies->items() as $allergy)
    <tr>
        <td>{{ $allergy->id }}</td>
        <td>{{ $allergy->name }}</td>
        <td>{{ $allergy->category }}</td>
        <td>{{ $allergy->note }}</td>
        <td>{{ $allergy->diagnosed_at }}</td>
        <td>          
          <a class="btn btn-dark" href="{{ route('allergies.show' , ['allergy' => $allergy->id]) }}" role="button">Details</a>
          <a class="btn btn-dark" href="{{ route('allergies.edit' , ['allergy' => $allergy->id]) }}" role="button">Edit</a>
        </td>
      </tr>
    @endforeach

   
  </tbody>
</table>
@endsection

