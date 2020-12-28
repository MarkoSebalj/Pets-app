<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div>
<h3>User Detail</h3>
<ul class="list-unstyled">
<<<<<<< HEAD
<li>First Name: {{ $user->first_name }}</li>
<li>Last Name: {{ $user->last_name }}</li>
<li>Email: {{ $user->email }}</li>
<li>Country: {{ $user->country->name }}</li>
=======
<li>Name {{ $user->first_name }}</li>
<li>Gender {{ $user->last_name }}</li>
<li>Breed {{ $user->password }}</li>
<li>Born at {{ $user->email }}</li>
<li>Country {{ $user->country_id }}</li>
>>>>>>> 4017ae9f955567bc504ff91a2ad6eaf16c9b5629
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back</a>
</div>
@endsection

