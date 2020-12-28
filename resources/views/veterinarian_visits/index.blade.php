@extends('layouts.app')



@section('content')
<a href="{{ route('veterinarian_visits.create') }}" class="btn btn-outline-dark mt-5">Add</a>

<div class="container">

<table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th> 
      <th scope="col">Note</th>
      <th scope="col">Appointment At</th>
      <th>Actions</th>      
    </tr>
  </thead>
  <tbody>
    @foreach ($veterinarian_visits->items() as $veterinarian_visit)
    <tr>
        <td>{{ $veterinarian_visit->id }}</td>
        <td>{{ $veterinarian_visit->name }}</td>
        <td>{{ $veterinarian_visit->price }}</td>
        <td>{{ $veterinarian_visit->note }}</td>
        <td>{{ $veterinarian_visit->appointment_at }}</td>
        <td>
          <a class="btn btn-outline-dark" href="{{ route('veterinarian_visits.show' , ['veterinarian_visit' => $veterinarian_visit->id]) }}" role="button">Details</a>
          <a class="btn btn-outline-dark" href="{{ route('veterinarian_visits.edit' , ['veterinarian_visit' => $veterinarian_visit->id]) }}" role="button">Edit</a>
        </td>
    @endforeach 
   
  </tbody>
</table>
@endsection
