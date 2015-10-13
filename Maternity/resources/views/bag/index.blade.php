@extends('layouts.master')

@section('content')

	<section class="content">
		<h2>Your bag</h2>
		<div class="featured-clothes-wrapper spacing-top">
			@if( isset($products))
				@foreach($products as $product)
					<article>
						<a href="/product/view/{{$product->id}}">
							{!! Html::image('img/' . $product->image) !!}
							<h1>{{$product->brand}}</h1>
							<div class="price"><span>&euro;</span>{{$product->price}}</div>
							<div class="size">{{$product->size}}</div>
							<div class="colors">
								@foreach($product->colors as $color)
									<div style="background-color: {{$color->name}}"></div>
								@endforeach
							</div>
						</a>
						<div class="product-nav">
							<a href="/bag/remove/{{$product->id}}" class="rect-link dark lighter-hover">remove</a>
						</div>
					</article>

				@endforeach
			@else
				Aw! Nothing in your bag yet!
			@endif
		</div>
	</section>

	<div class="content hairline">&nbsp;</div>

	<section class="content bag">
		<p>Total €380,-</p>
		<a href="" class="rect-link">checkout</a>
	</section>
@stop