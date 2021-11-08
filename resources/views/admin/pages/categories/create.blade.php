@extends('admin.layouts.master')
@section('content')


<div class="content-wrapper">

    <div class="row">
        <div class='card'>
            <div class="card-header">
                Add Products
            </div>
            <form action="{{ route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                @include('admin.partials.messages')

                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                        placeholder="Title">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" name="description" id="description"
                        aria-describedby="emailHelp" placeholder="Description">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Parent category</label>
                    <select class="form-control" name="parent_id">

                        @foreach ($main_categories as $category)
                        <option value="{{ $category->id}}">{{$category->name}}</option>


                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="product_image">Category Image</label>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                    </div>


                </div>

                <button type="submit" class="btn btn-primary">Add Category</button>
            </form>
        </div>
    </div>
</div>
</div>
<!-- partial -->



@endsection