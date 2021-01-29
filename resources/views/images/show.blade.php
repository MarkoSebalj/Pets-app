@extends('layouts.app')

@section('content')

<div>
    <h3>Image Detail</h3>
    <ul class="list-unstyled">
    <li>Image Path {{ $image->image_path }}</li>
    <li>Added at {{ $image->added_at }}</li>
    <li>Description {{ $image->description }}</li>
    <li>Pet ID {{ $image->pet_id }}</li>
</ul>
             
       
    </ul>
</div>


<div class="btn-group" role="group">
<a class="btn btn-secondary" href="{{ route('images.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('images.edit', ['image' => $image]) }}">Edit</a>

<form class="form-inline" action="{{ route('images.destroy', ['image' => $image->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>



@endsection