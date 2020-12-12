<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div>
<h3>Pet Detail</h3>
<ul class="list-unstyled">
<li>Name {{ $pet->name }}</li>
<li>Gender {{ $pet->gender }}</li>
<li>Breed {{ $pet->breed }}</li>
<li>Born at {{ $pet->born_at }}</li>
<li><a href="https://en.wikipedia.org/w/index.php?search= {{ $pet->breed }}">Wiki link</a></li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back</a>
</div>
@endsection

