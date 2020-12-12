@extends('layouts.app')



@section('content')
<a href="{{ route('calendars.create') }}" class="btn btn-outline-dark mt-5">Add</a>
<div class="container">

<table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Vaccination At</th>
      <th scope="col">Bedtime At</th> 
      <th scope="col">Bathtime At</th>
      <th scope="col">Foodtime At</th>
      <th scope="col">Pets ID</th> 
      <th>Actions</th> 
  
    </tr>
  </thead>
  <tbody>
    @foreach ($calendars->items() as $calendar)
    <tr>
        <td>{{ $calendar->id }}</td>
        <td>{{ $calendar->vaccination_at }}</td>
        <td>{{ $calendar->bedtime_at }}</td>
        <td>{{ $calendar->bathtime_at }}</td>
        <td>{{ $calendar->foodtime_at }}</td>
        <td>{{ $calendar->pet_id }}</td>
        <td>
          <a class="btn btn-outline-dark" href="{{ route('calendars.show' , ['calendar' => $calendar->id]) }}" role="button">Details</a>
          <a class="btn btn-outline-dark" href="{{ route('calendars.edit' , ['calendar' => $calendar->id]) }}" role="button">Edit</a>
        </td>
    @endforeach 
   
  </tbody>
</table>
@endsection


