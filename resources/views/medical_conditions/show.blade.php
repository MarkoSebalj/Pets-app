<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div>
<h3>Medical Condition Detail</h3>
<ul class="list-unstyled">
<li>Name {{ $medical_condition->name }}</li>
<li>Severity {{ $medical_condition->severity }}</li>
<li>Note {{ $medical_condition->note }}</li>
<li>Diagnosed at {{ $medical_condition->diagnosed_at }}</li>
<li><a href="https://en.wikipedia.org/w/index.php?search= {{ $medical_condition->name }}">Wiki link</a></li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back</a>
</div>
@endsection

