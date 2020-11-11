@extends('master')

@section('content')

<div class="container">
	<div class="row mt-4">
		<div class="col-sm-6">
			<img src="{{$product->gallery}}">
		</div>
		<div class="col-sm-6">
			<a href="/">Go Back</a>
			<h2>Name: {{$product->name}}</h2>
			<h4>Price: ${{$product->price}}</h4>
			<h4>Category: {{$product->category}}</h4>
			<p>{{$product->description}}</p>
			<p><form action="/add_to_cart" method="POST">
				<input type="hidden" name="product_id" value="{{$product->id}}">
				@csrf
				<button class="btn btn-success">Add to Cart</button>
			</form></p>
			<p><button class="btn btn-primary">Buy Now</button></p>
		</div>
	</div> <!-- row.// -->
</div> 
<!--container.//-->

@endsection