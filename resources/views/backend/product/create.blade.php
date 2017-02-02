@extends('backend.master')

@section('title')
	<title>Add new product</title>
@stop

@section('box-header')
	<div class="box-header with-border">
      <h3 class="box-title">Add a new product</h3>
	</div>
    <!-- /.box-header -->
@stop

@section('content')

<!-- form start -->
<form role="form" action="{{ url('backend/products') }}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		@include('backend.product._form')
</form>
@stop

