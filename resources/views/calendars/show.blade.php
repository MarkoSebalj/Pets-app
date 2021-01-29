@extends('layouts.app')

@section('content')

<div>
    <h3 class="mt-3">Calendar details</h3>
    <ul class="list-unstyled">        
        <li>Name: {{ $calendar->vaccination_at }}</li>
        <li>Category: {{ $calendar->bedtime_at }}</li>
        <li>Note: {{ $calendar->bathtime_at }}</li>
        <li>Diagnosed At: {{ $calendar->foodtime_at }}</li>
        <li>Pet ID {{ $calendar->pet_id }}</li>
             
       
    </ul>
</div>


<div class="btn-group" role="group">
<a class="btn btn-outline-dark" href="{{ route('calendars.index') }}">Back</a>

<a class="btn btn-outline-dark" href="{{ route('calendars.edit', ['calendar' => $calendar]) }}">Edit</a>

<form class="form-inline" action="{{ route('calendars.destroy', ['calendar' => $calendar->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>



@endsection