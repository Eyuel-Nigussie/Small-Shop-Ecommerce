@extends('master')
@section('content')
 <div class="custom-product">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <?php $pic_num=0; ?>
                @foreach ($products as $item )
                <li data-target="#demo" data-slide-to="{{$pic_num   }}"></li>
                <?php $pic_num++ ?>
                @endforeach 
            </ul>
          
            <!-- The slideshow -->
            <div class="carousel-inner">
                @foreach ($products as $item )     
                  <div class="carousel-item {{$item['id']==1?'active':''}}">
                        <a href="detail/{{$item['id']}}">
                              <img class="slider-img" src="{{$item['gallery']}}" alt="Los Angeles">
                              <div class="carousel-caption">
                                  <h3>{{$item['name']}}</h3>
                                  <p>{{$item['description']}}</p>
                              </div>
                        </a>
                  </div>
                @endforeach
            </div>
          
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
            
          </div>

        </div>
    <div class="trending-wrapper">
      <h2>Trending Items</h2>
      <div class="trending-items">
            @foreach ($products as $item)
                <div class="trending-item">
                  <a href="detail/{{$item['id']}}">
                    <img class="trending-image" src="{{$item['gallery']}}" alt="Los Angeles">
                  <div class="">
                      <h3>{{$item['name']}}</h3>
                      <p>{{$item['description']}}</p>
                  </div>
                  </a>
              </div>
            @endforeach  
      </div>
    </div>


@endsection