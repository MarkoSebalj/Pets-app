@extends('layouts.app')

@section('content')
  <table class="table table-striped mt-5">
    <thead>
      <tr>
        <th>Id</th>
        <th>First Name / Last Name</th>
        <th>Email</th>
        <th>Country</th>
        <th>Role</th>
        
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users->items() as $user)
          <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->first_name }}<br />{{ $user->last_name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->country->name }}</td>
              <td>{{ $user->role->name }}</td>
              
              <td>
                <a class="btn btn-outline-dark" href="{{ route('users.show', ['user' => $user->id]) }}">Details</a>
                <a class="btn btn-outline-dark" href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
                <a class="btn btn-outline-dark" href="{{ route('change_password.edit', ['user' => $user->id]) }}">Change password</a>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-center">
        {{ $users->links() }}
  </div>
@endsection