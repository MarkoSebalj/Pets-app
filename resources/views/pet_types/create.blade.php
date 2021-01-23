@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('pet_types.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- name -->
        <div class="form-group">
            <label for="name">Pet Type name</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        
        
        
        <button type="submit" class="btn btn-outline-dark">Save</button>
        <a href="{{ route('pet_types.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection