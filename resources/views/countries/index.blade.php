<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>      
    </tr>
  </thead>
  <tbody>
    @foreach ($countries->items() as $country)
    <tr>
        <td>{{ $country->id }}</td>
        <td>{{ $country->name }}</td>
    @endforeach 
   
  </tbody>
</table>
@endsection

