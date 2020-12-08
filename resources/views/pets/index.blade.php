<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')



@section('content')
<div class="container">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th> 
      <th scope="col">Breed</th>
      <th scope="col">Born At</th>     
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
    @endforeach 
   
  </tbody>
</table>
@endsection


