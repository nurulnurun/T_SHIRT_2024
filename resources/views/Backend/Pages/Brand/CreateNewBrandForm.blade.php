@extends('Backend.Master')

@section('Main Content')

<div>
    <h1>Create new Brand</h1> <a href="#" class="btn btn-success btn-sm" style = "float:right; margin-top:-50px">Show Brand List</a>
</div>

<div>
    <form action = "{{ route('brand.store') }}" method = "post">
            @csrf
        <div class="mb-3">
            <label for="brandID" class="form-label">Brand ID</label>
            <input type="number" class="form-control" id="" name="brand_id" placeholder="Enter Brand ID">
        </div>

        <div class="mb-3">
            <label for="brandName" class="form-label">Brand Name</label>
            <input type="text" class="form-control" id="" name="brand_name" placeholder="Enter Brand Name">
        </div>

        <div class="mb-3 form-check">
            <label for="brandStatus" class="form-label">Brand Status</label><br>
            <textarea name="brand_status" id="" cols="100" rows="7" placeholder="Brand Short Status"></textarea>
        </div>

        <div class="mb-3">
            <label for="brandImage" class="form-label">Brand Image</label>
            <input type="file" class="form-control" id="" name="brand_image" placeholder="Upload Brand Image">
        </div>

        <div class="mb-3 form-check">
            <label for="brandDescription" class="form-label">Brand Description</label><br>
            <textarea name="brand_description" id="" cols="50" rows="7" placeholder="Explain the Brand Description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection



