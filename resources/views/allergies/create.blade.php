@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('allergies.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- allergy name -->
        <div class="form-group">
            <label for="name">Allergy name</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <!-- category -->
        <div class="form-group">
            <label for="category">Category</label>
            <input value="{{ @old('category') }}" name="category" type="text" class="form-control" id="category">
            @if ($errors->has('category'))
                <span class="text-danger">{{ $errors->first('category') }}</span>
            @endif
        </div>

        <!-- note -->
        <div class="form-group">
            <label for="note">Note</label>
            <input value="{{ @old('note') }}" name="note" type="text" class="form-control" id="note">
            @if ($errors->has('note'))
                <span class="text-danger">{{ $errors->first('note') }}</span>
            @endif
        </div>

        <!-- dijagnoza -->
        <div class="form-group">
            <label for="diagnosed_at">Diagnosed At</label>
            <input value="{{ @old('diagnosed_at') }}" name="diagnosed_at" type="text" class="form-control" id="diagnosed_at">
            @if ($errors->has('diagnosed_at'))
                <span class="text-danger">{{ $errors->first('diagnosed_at') }}</span>
            @endif
        </div>

        
        
        <button type="submit" class="btn btn-outline-dark">Save</button>
        <a href="{{ route('allergies.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection