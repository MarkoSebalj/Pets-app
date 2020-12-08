<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')



@section('content')
<div class="container">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th> 
      <th scope="col">Password</th>
      <th scope="col">Email</th>   
      <th scope="col">Country</th>   
    </tr>
  </thead>
  <tbody>
    @foreach ($users->items() as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->first_name }}</td>
        <td>{{ $user->last_name }}</td>
        <td>{{ $user->password }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->country_id }}</td>
    @endforeach 
   
  </tbody>
</table>
@endsection

