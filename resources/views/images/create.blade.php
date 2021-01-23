@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('images.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- image path -->
        <div class="form-group">
            <label for="image_path">Image Path</label>
            <input value="{{ @old('image_path') }}" name="image_path" type="text" class="form-control" id="image_path">
            @if ($errors->has('image_path'))
                <span class="text-danger">{{ $errors->first('image_path') }}</span>
            @endif
        </div>


         <!-- added at -->
         <div class="form-group">
            <label for="added_at">Added At</label>
            <input value="{{ @old('added_at') }}" name="added_at" type="text" class="form-control" id="added_at">
            @if ($errors->has('added_at'))
                <span class="text-danger">{{ $errors->first('added_at') }}</span>
            @endif
        </div>


        <!-- description -->
        <div class="form-group">
            <label for="description">Description</label>
            <input value="{{ @old('description') }}" name="description" type="text" class="form-control" id="description">
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>

        <!-- pet -->      
        <div class="form-group">
    <label for="pet"><b>Pet ID</b></label>
        <input type="number" name="pet_id" value="{{ @old('pet_id') }}" class="form-control mb-5" id="pet_id">
        @if ($errors->has('pet_id'))
            <span class="text-danger">{{ $errors->first('pet_id') }}</span>
        @endif

        
        
        <button type="submit" class="btn btn-outline-dark">Save</button>
        <a href="{{ route('images.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection