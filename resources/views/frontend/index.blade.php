@extends('frontend.master')

@section('title')
  <title>Products</title>
@stop

@section('content')
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Products</h1>
		<em></em>
		<h2>Home<label>/</label>Products</h2>
	</div>
</div>
<!--content-->
<div class="product">
	<div class="container">
		<div class="col-md-9">
			<div class="mid-popular">
			@if($products->count() > 0)
			@foreach($products as $product)
				<div class="col-md-4 item-grid1 simpleCart_shelfItem">
					<div class=" mid-pop">
						<div class="pro-img">
							<img src="{{ $product->image }}" class="img-responsive" alt="">
							<div class="zoom-icon ">
								<a class="picture" href="{{ $product->image }}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
							</div>
						</div>
						<div class="mid-1">
							<div class="women">
								<div class="women-top">
									<span>{{$product->category->name}}</span>
									<h6>{{$product->name}}</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p>
								@if($product->sale_price != null)
								<label>{{ $product->price }}$</label><em class="item_price">{{ $product->sale_price }}$</em>
								@elseif( $product->sale_price == null)
								<em class="item_price">{{ $product->price }}$</em>
								@endif
								</p>
								<div class="block">
								<p><strong>{{ $product->status }}</strong></p>
								</div>
								
								<div class="clearfix"></div>
							</div>
							
						</div>
					</div>
				</div>
	
			@endforeach
			@else
			<div class="col-md-4 item-grid1 simpleCart_shelfItem">
			<p>No products found!</p>
			</div>
			@endif
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-3 product-bottom">
			<!--categories-->
			<div class=" rsidebar span_1_of_left">
				<h4 class="cate">Categories</h4>
				<ul class="menu-drop">
				<li class="item1"><a href="{{ url('products') }}">All</a></li>
				@foreach($categories as $category)
					<li class="item{{$category->id}}">
						<a href="{{ url('categories', [$category->id]) }}">{{ $category->name }}</a>
					</li>
				@endforeach
				</ul>
			</div>
			<!--initiate accordion-->
			<!-- <script type="text/javascript">
				$(function() {
					var menu_ul = $('.menu-drop > li > ul'),
					menu_a  = $('.menu-drop > li > a');
					menu_ul.hide();
					menu_a.click(function(e) {
						e.preventDefault();
						if(!$(this).hasClass('active')) {
							menu_a.removeClass('active');
							menu_ul.filter(':visible').slideUp('normal');
							$(this).addClass('active').next().stop(true,true).slideDown('normal');
						} else {
							$(this).removeClass('active');
							$(this).next().stop(true,true).slideUp('normal');
						}
					});

				});
			</script> -->
			<!--//menu-->
		</div>
	</div class="clearfix"></div>
	<!--brand-->
	<div class="container">
		<div class="brand">
			<div class="col-md-3 brand-grid">
				<img src="{{ asset('interface/images/ic.png') }}" class="img-responsive" alt="">
			</div>
			<div class="col-md-3 brand-grid">
				<img src="{{ asset('interface/images/ic1.png') }}" class="img-responsive" alt="">
			</div>
			<div class="col-md-3 brand-grid">
				<img src="{{ asset('interface/images/ic2.png') }}" class="img-responsive" alt="">
			</div>
			<div class="col-md-3 brand-grid">
				<img src="{{ asset('interface/images/ic3.png') }}" class="img-responsive" alt="">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--//brand-->
</div>

</div>
<!--//content-->
@stop