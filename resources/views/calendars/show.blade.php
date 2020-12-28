<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div>
<h3>Calendar Detail</h3>
<ul class="list-unstyled">
<li>Name {{ $calendar->vaccination_at }}</li>
<li>Gender {{ $calendar->bedtime_at }}</li>
<li>Breed {{ $calendar->bathtime_at }}</li>
<li>Born at {{ $calendar->foodtime_at }}</li>
<li>Pet ID {{ $calendar->pet_id }}</li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back</a>
</div>
@endsection

