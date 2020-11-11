@extends('master')

@section('content')
<div class="custom-product">
	<div id="demo" class="carousel slide" data-ride="carousel">
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>
	  
	  <!-- The slideshow -->
	  <div class="carousel-inner">
	  	@foreach($products as $item)
	    <div class="carousel-item {{$item['id']==1?'active':''}}">
	      <img src="{{$item->gallery}}" alt="Los Angeles" width="1100" height="500">
	      <div class="carousel-caption d-none d-md-block">
		    <h5>{{$item->name}}</h5>
		    <p>{{$item->description}}</p>
		  </div>
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

<div class="container">
	<br><p class="text-center">Tranding Products</p>
	<hr>
	<div class="row">
		@foreach($products as $item)
			<div class="col-md-4">
				<figure class="card card-product">
					<div class="img-wrap"><img src="{{$item->gallery}}"></div>
					<figcaption class="info-wrap">
							<h4 class="title">{{$item->name}}</h4>
							<p class="desc">{{$item->description}}</p>
					</figcaption>
					<div class="bottom-wrap">
						<a href="" class="btn btn-sm btn-primary float-right">View Details</a>	
						<div class="price-wrap h5">
							<span class="price-new">${{$item->price}}</span> <del class="price-old">$1980</del>
						</div> <!-- price-wrap.// -->
					</div> <!-- bottom-wrap.// -->
				</figure>
			</div> <!-- col // -->
		@endforeach
	</div> <!-- row.// -->
</div> 
<!--container.//-->
<style>
  /* Make the image fully responsive */
.carousel-inner img {
	width: 100%;
}
.card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center;
}
.card-product .img-wrap img {
    max-height: 100%;
    max-width: 100%;
    object-fit: cover;
}
.card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee;
}
.card-product .bottom-wrap {
    padding: 15px;
    border-top: 1px solid #eee;
}

.label-rating { margin-right:10px;
    color: #333;
    display: inline-block;
    vertical-align: middle;
}

.card-product .price-old {
    color: #999;
}
</style>
@endsection