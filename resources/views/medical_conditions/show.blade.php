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
</div>


<div class="btn-group" role="group">
<a class="btn btn-secondary" href="{{ route('medical_conditions.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('medical_conditions.edit', ['medical_condition' => $medical_condition]) }}">Edit</a>

<form class="form-inline" action="{{ route('medical_conditions.destroy', ['medical_condition' => $medical_condition->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>



@endsection