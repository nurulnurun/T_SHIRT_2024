@extends('Backend.Master')

@section('Main Content')

<div>
    <h1>Brand List</h1> <a href="#" class="btn btn-success btn-sm" style = "float:right; margin-top:-50px">Create new Brand</a>
</div>

<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SL. No</th>
                <th scope="col">Brand ID</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Brand Status</th>
                <th scope="col">Brand Image</th>
                <th scope="col">Brand Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
                @foreach($brands as $Brand_Item)
            <tr>
                <th scope="row">{{ $Brand_Item->id }}</th>
                <td>{{ $Brand_Item->brand_id }}</td>
                <td>{{ $Brand_Item->brand_name }}</td>
                <td>{{ $Brand_Item->brand_status }}</td>
                <td>{{ $Brand_Item->brand_image }}</td>
                <td>{{ $Brand_Item->brand_description }}</td>
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



