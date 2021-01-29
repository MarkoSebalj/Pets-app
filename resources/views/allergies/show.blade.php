@extends('layouts.app')

@section('content')

<div>
    <h3 class="mt-3">Allergy details</h3>
    <ul class="list-unstyled">        
        <li>Name: {{ $allergy->name }}</li>
        <li>Category: {{ $allergy->category }}</li>
        <li>Note: {{ $allergy->note }}</li>
        <li>Diagnosed At: {{ $allergy->diagnosed_at }}</li> 
             
        <li><a href="https://en.wikipedia.org/w/index.php?search={{ $allergy->name }}">Wikipedia link</a></li>
    </ul>
</div>


<div class="btn-group" role="group">
<a class="btn btn-outline-dark" href="{{ route('allergies.index') }}">Back</a>

<a class="btn btn-outline-dark" href="{{ route('allergies.edit', ['allergy' => $allergy]) }}">Edit</a>

<form class="form-inline" action="{{ route('allergies.destroy', ['allergy' => $allergy->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>



@endsection