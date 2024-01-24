@extends('Backend.Master')

@section('Main Content')

<div>
    <h1>Categories List</h1> <a href="{{ route('create.new.category.form') }}" class="btn btn-success btn-sm" style = "float:right; margin-top:-50px">Create new Category</a>
</div>

<div>
    <form>

    <div class="mb-3">
        <label for="userID" class="form-label">User ID</label>
        <input type="number" class="form-control" id="" name="user_id" placeholder="Enter User ID">
    </div>
    <div class="mb-3">
        <label for="userName" class="form-label">User Name</label>
        <input type="text" class="form-control" id="" name="name" placeholder="Enter User Name">
    </div>
    <div class="mb-3 form-check">
        <label for="userEmail" class="form-label">User Email</label>
        <input type="email" class="form-control" id="" name="email" placeholder="Enter User email">
    </div>
    <div class="mb-3 form-check">
        <label for="userPassword" class="form-label">User Password</label>
        <input type="password" class="form-control" id="" name="password" placeholder="Enter User Password">
    </div>
    <div class="mb-3 form-check">
        <label for="userImage" class="form-label">User Image</label>
        <input type="file" class="form-control" id="" name="image" placeholder="Upload Image File">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection



