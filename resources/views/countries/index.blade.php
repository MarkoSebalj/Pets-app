<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route('countries.create') }}" class="btn btn-outline-dark mt-5">Add</a>
<div class="container">

<table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th>Actions</th>      
    </tr>
  </thead>
  <tbody>
    @foreach ($countries->items() as $country)
    <tr>
        <td>{{ $country->id }}</td>
        <td>{{ $country->name }}</td>
        <td>
          <a class="btn btn-outline-dark" href="{{ route('countries.show' , ['country' => $country->id]) }}" role="button">Details</a>
          <a class="btn btn-outline-dark" href="{{ route('countries.edit' , ['country' => $country->id]) }}" role="button">Edit</a>
        </td>
    @endforeach 
   
  </tbody>
</table>
@endsection

