@extends('layouts.app')

@section('content')

<div>
<h3>Veterinarian Visit Detail</h3>
<ul class="list-unstyled">
<li>Name {{ $veterinarian_visit->name }}</li>
<li>Price {{ $veterinarian_visit->price }}</li>
<li>Note {{ $veterinarian_visit->note }}</li>
<li>Appointment at {{ $veterinarian_visit->appointment_at }}</li>
</ul>
</div>


<div class="btn-group" role="group">
<a class="btn btn-outline-dark" href="{{ route('veterinarian_visits.index') }}">Back</a>

<a class="btn btn-outline-dark" href="{{ route('veterinarian_visits.edit', ['veterinarian_visit' => $veterinarian_visit]) }}">Edit</a>

<form class="form-inline" action="{{ route('veterinarian_visits.destroy', ['veterinarian_visit' => $veterinarian_visit->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>



@endsection
