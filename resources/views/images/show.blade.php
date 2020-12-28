<!-- Stored in resources/views/child.blade.php -->

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

<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back</a>
</div>
@endsection

