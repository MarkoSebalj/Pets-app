<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div>
<h3>Allergy Detail</h3>
<ul class="list-unstyled">
<li>Name {{ $allergy->name }}</li>
<li>Category {{ $allergy->category }}</li>
<li>Note {{ $allergy->note }}</li>
<li>Diagnosed at {{ $allergy->diagnosed_at }}</li>
<li><a href="https://en.wikipedia.org/w/index.php?search= {{ $allergy->name }}">Wiki link</a></li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back</a>
</div>
@endsection

