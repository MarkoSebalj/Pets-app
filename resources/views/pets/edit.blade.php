@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('pets.update', ['pet' => $pet->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!-- name -->
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ $pet->name }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>


         <!-- gender -->
         <div class="form-group">
            <label for="gender">Gender</label>
            <input value="{{ $pet->gender }}" name="gender" type="text" class="form-control" id="gender">
            @if ($errors->has('gender'))
                <span class="text-danger">{{ $errors->first('gender') }}</span>
            @endif
        </div>


        <!-- breed -->
        <div class="form-group">
            <label for="breed">Breed</label>
            <input value="{{ $pet->breed }}" name="breed" type="text" class="form-control" id="breed">
            @if ($errors->has('breed'))
                <span class="text-danger">{{ $errors->first('breed') }}</span>
            @endif
        </div>

        <!-- born at -->  
        <div class="form-group">
            <label for="born_at">Born At</label>
            <input value="{{ $pet->born_at }}" name="born_at" type="text" class="form-control" id="born_at">
            @if ($errors->has('born_at'))
                <span class="text-danger">{{ $errors->first('born_at') }}</span>
            @endif
        </div>

   

        <!-- pet -->
        <div class="form-group">
            <label for="medical_condition">Medical Condition</label>
            {{ Form::select('medical_condition_id', $medical_conditions, $pet->medical_condition_id, ['class' => 'form-control', 'id' => 'medical_condition']) }}
        </div>

      
        <div class="mt-4">
            <button type="submit" class="btn btn-outline-dark float-right">Save</button>
            <a href="{{ route('pets.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection