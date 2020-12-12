<!-- Stored in resources/views/child.blade.php -->

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

<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back</a>
</div>
@endsection

