@extends('admin.layouts.master')
@section('content')


<div class="content-wrapper">

    <div class="row">
        <div class='card'>
            <div class="card-header">
                Add Products
            </div>
            <form action="{{ route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                @include('admin.partials.messages')

                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp"
                        placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" class="form-control" name="description" id="description"
                        placeholder="Description">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" class="form-control" name="price" id="price" aria-describedby="emailHelp"
                        placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="number" class="form-control" name="quantity" id="quantity" aria-describedby="emailHelp"
                        placeholder="Quantity">
                </div>


                <div class="form-group">
                    <label for="product_image">Product Image</label>


                    <div class="row">
                        <div class="col-md-4">
                            <input type="file" class="form-control" name="product_image[]" id="product_image">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <input type="file" class="form-control" name="product_image[]" id="product_image">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <input type="file" class="form-control" name="product_image[]" id="product_image">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <input type="file" class="form-control" name="product_image[]" id="product_image">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <input type="file" class="form-control" name="product_image[]" id="product_image">
                        </div>
                    </div>


                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
<!-- partial -->



@endsection