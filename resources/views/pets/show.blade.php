@extends('layouts.app')

@section('content')

<div>
<h3>Pet Detail</h3>
<ul class="list-unstyled">
<li>Name {{ $pet->name }}</li>
<li>Gender {{ $pet->gender }}</li>
<li>Breed {{ $pet->breed }}</li>
<li>Born at {{ $pet->born_at }}</li>
<li>User  {{ $pet->user->first_name }}</li>
<li>Pet Type {{ $pet->pet_type->name }}</li>
<li>Medical Condition {{ $pet->medical_condition->name }}</li>



<li><a href="https://en.wikipedia.org/w/index.php?search= {{ $pet->breed }}">Wiki link</a></li>
</ul>
</div>


<div class="btn-group" role="group">
<a class="btn btn-secondary" href="{{ route('pets.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('pets.edit', ['pet' => $pet]) }}">Edit</a>

<form class="form-inline" action="{{ route('pets.destroy', ['pet' => $pet->id]) }}" method="POST">

    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>



@endsection