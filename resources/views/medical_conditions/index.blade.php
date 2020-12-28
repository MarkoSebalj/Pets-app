@extends('layouts.app')

@section('content')
<a href="{{ route('medical_conditions.create') }}" class="btn btn-outline-dark mt-5">Add</a>
<div class="container">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Severity</th>
      <th scope="col">Note</th>
      <th scope="col">Diagnosed At</th>   
      <th>Actions</th>    
    </tr>
  </thead>
  <tbody>
    @foreach ($medical_conditions->items() as $medical_condition)
    <tr>
        <td>{{ $medical_condition->id }}</td>
        <td>{{ $medical_condition->name }}</td>
        <td>{{ $medical_condition->severity }}</td>
        <td>{{ $medical_condition->note }}</td>
        <td>{{ $medical_condition->diagnosed_at }}</td>
        <td>
          <a class="btn btn-outline-dark" href="{{ route('medical_conditions.show' , ['medical_condition' => $medical_condition->id]) }}" role="button">Details</a>
          <a class="btn btn-outline-dark" href="{{ route('medical_conditions.edit' , ['medical_condition' => $medical_condition->id]) }}" role="button">Edit</a>
        </td>
    @endforeach 
   
  </tbody>
</table>
@endsection

