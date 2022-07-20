@extends('master')
@section('content')
    <div class="detail-container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$item['gallery']}}" alt="">
            </div>
            <div class="item-detail col-sm-6">
                <a href="/">Go Back</a>

                <h2>{{$item['name']}}</h2>
                <h3>Price: ${{$item['price']}}</h3>
                <h3>Description:  {{$item['description']}}</h3>
                <h4>Catagory: {{$item['catagory']}}</h4>
                <form action="/addToCart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$item['id']}}">
                    <button class="btn btn-warning">Add to Cart</button>
                </form>
                <button class="btn btn-success">Buy Now</button>
            </div>
        </div>
    </div>
@endsection