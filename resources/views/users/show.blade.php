<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div>
<h3>User Detail</h3>
<ul class="list-unstyled">
<li>Name {{ $user->first_name }}</li>
<li>Gender {{ $user->last_name }}</li>
<li>Breed {{ $user->password }}</li>
<li>Born at {{ $user->email }}</li>
<li>Country {{ $user->country_id }}</li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back</a>
</div>
@endsection

