@extends('layouts.app')

@section('content')

<div>
<div>
<h3>Pet Type Detail</h3>
<ul class="list-unstyled">
<li>Name {{ $pet_type->name }}</li>
<li><a href="https://en.wikipedia.org/w/index.php?search= {{ $pet_type->name }}">Wiki link</a></li>
</ul>
</div>


<div class="btn-group" role="group">
<a class="btn btn-secondary" href="{{ route('pet_types.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('pet_types.edit', ['pet_type' => $pet_type]) }}">Edit</a>

<form class="form-inline" action="{{ route('pet_types.destroy', ['pet_type' => $pet_type->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>



@endsection