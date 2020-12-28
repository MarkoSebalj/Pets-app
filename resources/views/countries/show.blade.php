<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div>
<h3>Country detail</h3>
<ul class="list-unstyled">
<li>Name {{ $country->name }}</li>
<li><a href="https://en.wikipedia.org/w/index.php?search= {{ $country->name }}">Wiki link</a></li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back</a>
</div>
@endsection

