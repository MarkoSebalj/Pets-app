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
    @endforeach 
   
  </tbody>
</table>
@endsection

