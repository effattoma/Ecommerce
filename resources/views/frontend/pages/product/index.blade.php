@extends('frontend.layouts.master')
@section('content')
<!-- start side bar + content -->
<div class="container margin-top-20">
    <div class="row">
        <div class="col-md-4">
            @include('frontend.partials.product_sidebar')
        </div>
        <div class="col-md-8">
            <div class="weiget">
                <h3>products</h3>
                <div class="row">

                    @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card">
                            @php
                            $i = 1;
                            @endphp

                            @foreach ($product->images as $image)
                            @if ($i>0)
                             <img class="card-img-top feature-img"
                                src="{{ asset ('images/img/'. $image->image)}}" alt="Card image">

                                @endif
                                @php
                                $i--;
                                @endphp

                                @endforeach
                                <div class="card-body">
                                    <h4 class="card-title">
                                        {{ $product->title }}
                                    </h4>
                                    <p class="card-text">
                                        taka - {{ $product->price }}
                                    </p>
                                    <a href="#" class="btn btn-outline-warning">add to cart</a>
                                </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>



<!-- end side bar + content -->

</div>
@endsection