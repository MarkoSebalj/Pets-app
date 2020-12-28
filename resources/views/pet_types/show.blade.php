<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div>
<h3>Pet Type Detail</h3>
<ul class="list-unstyled">
<li>Name {{ $pet_type->name }}</li>
<li><a href="https://en.wikipedia.org/w/index.php?search= {{ $pet_type->name }}">Wiki link</a></li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back</a>
</div>
@endsection

