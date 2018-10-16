@extends('layouts.front')

@section('front_content')
    <div class="container">
        <div class="row pt120">
            <div class="books-grid">

            <div class="row mb30">
               
                @foreach($products as $product)
                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="books-item">
                        <div class="books-item-thumb">
                            <img src="{{asset($product->image)}}" alt="book">
                            <div class="new">New</div>
                            <div class="sale">Sale</div>
                            <div class="overlay overlay-books"></div>
                        </div>

                        <div class="books-item-info">
                            <a href="{{route('product.single',['id'=>$product->id])}}"><h5 class="books-title">{{$product->name}}</h5></a>

                            <div class="books-price">{{$product->price}}</div>
                        </div>

                        <a href="{{route('cart.rapid_add',['id'=>$product->id])}}" class="btn btn-small btn--dark add">
                            <span class="text">Add to Cart</span>
                            <i class="seoicon-commerce"></i>
                        </a>

                    </div>
                </div>    
                @endforeach
                    
                
            </div>

            <div class="row pb120">
                <div class="col-lg-12">
                   
                     {{$products->links()}} 
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
