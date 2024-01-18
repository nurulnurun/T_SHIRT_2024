@extends('Backend.Master')

@section('Main Content')

<div>
    <h1>Create new Product</h1> <a href="#" class="btn btn-success btn-sm" style = "float:right; margin-top:-50px">Show Product List</a>
</div>

<div>
    <form action = "{{ route('product.store') }}" method = "post" enctype = "multipart/form-data">
            @csrf
        <div class="mb-3">
            <label for="productID" class="form-label">Product ID</label>
            <input type="number" class="form-control" id="" name="product_id" placeholder="Enter Product ID">
        </div>

        <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="" name="product_name" placeholder="Enter Product Name">
        </div>

        <div class="mb-3">
            <label for="productImage" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="" name="product_image" placeholder="Upload a Product Image File">
        </div>

        <div class="mb-3">
            <label for="productPrice" class="form-label">Product Price</label>
            <input type="number" class="form-control" id="" name="product_price" placeholder="Enter the Product Price">
        </div>

        <div class="mb-3">
            <label for="productStock" class="form-label">Product Stock</label>
            <input type="number" class="form-control" id="" name="product_stock" placeholder="Enter the Product Stock">
        </div>


        <div class="mb-3 form-check">
            <label for="productStatus" class="form-label">Product Status</label><br>
            <textarea name="product_status" id="" cols="100" rows="7" placeholder="Product Short Status"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection



