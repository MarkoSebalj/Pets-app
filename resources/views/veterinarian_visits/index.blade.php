@extends('layouts.app')



@section('content')
<div class="container">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th> 
      <th scope="col">Note</th>
      <th scope="col">Appointment At</th>     
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
    @endforeach 
   
  </tbody>
</table>
@endsection
