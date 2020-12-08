@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>      
    </tr>
  </thead>
  <tbody>
    @foreach ($pet_types->items() as $pet_type)
    <tr>
        <td>{{ $pet_type->id }}</td>
        <td>{{ $pet_type->name }}</td>
    @endforeach 
   
  </tbody>
</table>
@endsection