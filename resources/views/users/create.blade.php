@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('users.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- user first name -->
        <div class="form-group">
            <label for="first_name">First name</label>
            <input value="{{ @old('first_name') }}" name="first_name" type="text" class="form-control" id="first_name">
            @if ($errors->has('first_name'))
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
            @endif
        </div>


         <!-- user last name -->
         <div class="form-group">
            <label for="last_name">Last Name</label>
            <input value="{{ @old('last_name') }}" name="last_name" type="text" class="form-control" id="last_name">
            @if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
            @endif
        </div>


        <!-- email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{ @old('email') }}" name="email" type="text" class="form-control" id="email">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <!-- country -->
        <div class="form-group">
            <label for="country">Country</label>
            {{ Form::select('country_id', $countries, $user->country_id, ['class' => 'form-control', 'id' => 'country']) }}
        </div>

        
        
        <button type="submit" class="btn btn-outline-dark">Save</button>
        <a href="{{ route('users.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection