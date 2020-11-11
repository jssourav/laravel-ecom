@extends('master')

@section('content')


<div class="container">
	<br><h1 class="text-center">Search for: {{$search_for}}</h1>
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
						<a href="detail/{{$item->id}}" class="btn btn-sm btn-primary float-right">View Details</a>	
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