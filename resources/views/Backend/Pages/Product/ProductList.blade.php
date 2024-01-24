@extends('Backend.Master')

@section('Main Content')

<div>
    <h1>Product List</h1> <a href="#" class="btn btn-success btn-sm" style = "float:right; margin-top:-50px">Create new Product</a>
</div>

<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SL. No</th>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Image</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Stock</th>
                <th scope="col">Product Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
                @foreach($product as $Product_Item)
            <tr>
                <th scope="row">{{ $Product_Item->id }}</th>
                <td>{{ $Product_Item->product_id }}</td>
                <td>{{ $Product_Item->product_name }}</td>
                <td>
                    <img width="20%" src="{{ url('/Uploads_File/'.$Product_Item->product_image) }}" alt="">
                </td>
                <td>{{ $Product_Item->product_price }}</td>
                <td>{{ $Product_Item->product_stock }}</td>
                <td>{{ $Product_Item->product_status }}</td>
            <td>
                <a class="btn btn-success btn-sm" href="">Edit</a>
                <a class="btn btn-danger btn-sm" href="">Delete</a>
                <a class="btn btn-primary btn-sm" href="">View</a>
            </td>
            </tr>
                @endforeach
        </tbody>
    </table>
</div>

@endsection



