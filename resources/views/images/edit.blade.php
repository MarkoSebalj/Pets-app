@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('images.update', ['image' => $image->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!-- image path -->
        <div class="form-group">
            <label for="image_path">Image</label>
            <input value="{{ $image->image_path }}" name="image_path" type="text" class="form-control" id="image_path">
            @if ($errors->has('image_path'))
                <span class="text-danger">{{ $errors->first('image_path') }}</span>
            @endif
        </div>


         <!-- added at -->
         <div class="form-group">
            <label for="added_at">Added At</label>
            <input value="{{ $image->added_at }}" name="added_at" type="text" class="form-control" id="added_at">
            @if ($errors->has('added_at'))
                <span class="text-danger">{{ $errors->first('added_at') }}</span>
            @endif
        </div>


        <!-- description -->
        <div class="form-group">
            <label for="description">Description</label>
            <input value="{{ $image->description }}" name="description" type="text" class="form-control" id="description">
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>

        <!-- pet -->
        <div class="form-group">
            <label for="pet">Pet</label>
            {{ Form::select('pet_id', $pets, $image->pet_id, ['class' => 'form-control', 'id' => 'pet']) }}
        </div>

      
        <div class="mt-4">
            <button type="submit" class="btn btn-outline-dark float-right">Save</button>
            <a href="{{ route('images.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection