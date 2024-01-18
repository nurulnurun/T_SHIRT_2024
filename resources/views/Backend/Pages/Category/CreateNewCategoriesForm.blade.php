@extends('Backend.Master')

@section('Main Content')

<div>
    <h1>Create new Category</h1> <a href="#" class="btn btn-success btn-sm" style = "float:right; margin-top:-50px">Show Categories List</a>
</div>

<div>
    <form action = "{{ route('category.post') }}" method = "post">
            @csrf
        <div class="mb-3">
            <label for="categoryID" class="form-label">Category ID</label>
            <input type="number" class="form-control" id="" name="category_id" placeholder="Enter Category ID">
        </div>

        <div class="mb-3">
            <label for="categoryName" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="" name="category_name" placeholder="Enter Category Name">
        </div>

        <div class="mb-3 form-check">
            <label for="categoryDescription" class="form-label">Category Description</label><br>
            <textarea name="category_description" id="" cols="100" rows="7" placeholder="Category Short Status"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection



