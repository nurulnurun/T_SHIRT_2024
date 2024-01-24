@extends('Backend.Master')

@section('Main Content')

<div>
    <h1>User List</h1>
    <div>
        <a href="" class="btn btn-success btn-lg">Create new User </a>
    </div>
</div>

<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL. No</th>
      <th scope="col">User ID</th>
      <th scope="col">User Name</th>
      <th scope="col">User Email</th>
      <th scope="col">User Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

        <!-- @foreach($users as $SingleUser)
    <tr>
      <th scope="row">{{ $SingleUser->id }}</th>
      <td>{{ $SingleUser->user_id }}</td>
      <td>{{ $SingleUser->user_name }}</td>
      <td>{{ $SingleUser->user_email }}</td>
      <td>{{ $SingleUser->user_image }}</td>
      <td>
        <a class="btn btn-success btn-sm" href="">Edit</a>
        <a class="btn btn-danger btn-sm" href="">Delete</a>
        <a class="btn btn-primary btn-sm" href="">View</a>
      </td>
    </tr>
        @endforeach -->

  </tbody>
</table>
</div>
@endsection



