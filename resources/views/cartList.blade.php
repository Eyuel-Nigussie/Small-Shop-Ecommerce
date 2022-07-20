@extends('master')
@section('content')
<div class="cart-list">
    <div class="">
        <div class="trending-wrapper">
            <h4>Result for Productses</h4>
            <a class="btn btn-success" href="ordernow">Order Now</a>
            @foreach($products as $item)
                <div class="row searched-item cart-list-divider">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-image" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="detail/{{$item->id}}">
                                <div class="">
                                    <h2>{{$item->name}}</h2>
                                    <h5>{{$item->description}}</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3"> 
                            {{-- To remove the item from cart, we need the cart id from the table, although we have product_id and userId we can't use that to remove from cart table
                            so go in cartList() func and add code to get cartID --}}
                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart </a>
                        </div>
                </div>  
            @endforeach
        </div>
    </div>
</div>
@endsection 