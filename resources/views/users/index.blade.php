<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')



@section('content')
<a href="{{ route('users.create') }}" class="btn btn-outline-dark mt-5">Add</a>
<div class="container">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
<<<<<<< HEAD
      <th scope="col">First Name / Last Name</th>
=======
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th> 
      <th scope="col">Password</th>
>>>>>>> 4017ae9f955567bc504ff91a2ad6eaf16c9b5629
      <th scope="col">Email</th>   
      <th scope="col">Country</th>
      <th>Actions</th>   
    </tr>
  </thead>
  <tbody>
    @foreach ($users->items() as $user)
    <tr>
        <td>{{ $user->id }}</td>
<<<<<<< HEAD
        <td>{{ $user->first_name }}<br />{{ $user->last_name }}</td>               
        <td>{{ $user->email }}</td>
        <td>{{ $user->country->name }}</td>
=======
        <td>{{ $user->first_name }}</td>
        <td>{{ $user->last_name }}</td>
        <td>{{ $user->password }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->country_id }}</td>
>>>>>>> 4017ae9f955567bc504ff91a2ad6eaf16c9b5629
        <td>
          <a class="btn btn-outline-dark" href="{{ route('users.show' , ['user' => $user->id]) }}" role="button">Details</a>
          <a class="btn btn-outline-dark" href="{{ route('users.edit' , ['user' => $user->id]) }}" role="button">Edit</a>
        </td>
    @endforeach 
   
  </tbody>
</table>
@endsection

