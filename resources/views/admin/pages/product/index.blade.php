@extends('admin.layouts.master')
@section('content')


<div class="content-wrapper">

    <div class="row">
        <div class='card'>
            <div class="card-header">
                Manage Products
            </div>
            <div class="card-body">
            <table class="table table-hover table-striped">
                <tr>
                    <th>#</th>

                    <th>Product Title</th>
                    <th>Price</th>
                    <th>quantity</th>
                    <th>Action</th>

                </tr>

                @foreach ($products as $product)
                <tr>
                    <td>#</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td><a href="{{ route('admin.product.edit' , $product->id) }}" class="btn btn-success">Edit</a></td>
                </tr>
                @endforeach

            </table>
            </div>
        </div>
    </div>
</div>
</div>
<!-- partial -->



@endsection