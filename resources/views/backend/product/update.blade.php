@extends('backend.master')

@section('title')
	<title>Update product</title>
@stop

@section('box-header')
	<div class="box-header with-border">
      <h3 class="box-title">Update product</h3>
	</div>
    <!-- /.box-header -->
@stop

@section('content')
	<?php $product_id = $product->id ?>
	<!-- form start -->
	<form role="form" action="{{ url('backend/products', [$product_id]) }}" method="POST" enctype="multipart/form-data" >
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		@include('backend.product._form')
	</form>
@stop