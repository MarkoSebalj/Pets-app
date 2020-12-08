@extends('layouts.app')



@section('content')
<div class="container">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Vaccination At</th>
      <th scope="col">Bedtime At</th> 
      <th scope="col">Bathtime At</th>
      <th scope="col">Foodtime At</th>
      <th scope="col">Pet ID</th>     
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
    @endforeach 
   
  </tbody>
</table>
@endsection


