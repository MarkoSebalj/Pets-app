@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('pets.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- name -->
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>


         <!-- gender -->
         <div class="form-group">
            <label for="gender">Gender</label>
            <input value="{{ @old('gender') }}" name="gender" type="text" class="form-control" id="gender">
            @if ($errors->has('gender'))
                <span class="text-danger">{{ $errors->first('gender') }}</span>
            @endif
        </div>


        <!-- breed -->
        <div class="form-group">
            <label for="breed">Breed</label>
            <input value="{{ @old('breed') }}" name="breed" type="text" class="form-control" id="breed">
            @if ($errors->has('breed'))
                <span class="text-danger">{{ $errors->first('breed') }}</span>
            @endif
        </div>

        <!-- born at --> 

        <div class="form-group">
            <label for="born_at">Born At</label>
            <input value="{{ @old('born_at') }}" name="born_at" type="text" class="form-control" id="born_at">
            @if ($errors->has('born_at'))
                <span class="text-danger">{{ $errors->first('born_at') }}</span>
            @endif
        </div>

        <div class="form-group">
    <label for="medical_condition"><b>Medical Condition ID</b></label>
        <input type="number" name="medical_condition_id" value="{{ @old('medical_condition_id') }}" class="form-control mb-5" id="medical_condition_id">
        @if ($errors->has('medical_condition_id'))
            <span class="text-danger">{{ $errors->first('medical_condition_id') }}</span>
        @endif

        
        
        <button type="submit" class="btn btn-outline-dark">Save</button>
        <a href="{{ route('pets.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection