@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Severity</th>
      <th scope="col">Note</th>
      <th scope="col">Diagnosed At</th>      
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
    @endforeach 
   
  </tbody>
</table>
@endsection

