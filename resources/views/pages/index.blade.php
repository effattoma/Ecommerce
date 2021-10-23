 @extends('layouts.master')
 @section('content')
  <!-- start side bar + content -->
  <div class="container margin-top-20">
            <div class="row">
                <div class="col-md-4">
                  @include('partials.product_sidebar')
                  
                </div>
                <div class="col-md-8">
                    <div class="weiget">
                        <h3>products</h3>
                        <div class="row">

                       
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="card-img-top feature-img" src="{{ asset ('images/img/'.'pic1.jpg') }}" alt="Card image">
                                    <div class="card-body">
                                        <h4 class="card-title">John Doe</h4>
                                        <p class="card-text">Some example text.</p>
                                        <a href="#" class="btn btn-outline-warning">add to cart</a>
                                    </div>
                                </div>
                            </div>

       

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- end side bar + content -->



        

    </div>



 @endsection

       




