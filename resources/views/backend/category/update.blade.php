@extends('backend.master')

@section('title')
	<title>Update category</title>
@stop

@section('box-header')
	<div class="box-header with-border">
      <h3 class="box-title">Update category information</h3>
	</div>
    <!-- /.box-header -->
@stop

@section('content')

<!-- form start -->
<!-- store url -->
<?php $category_id = $category->id ?>
<form role="form" action="{{ url('backend/categories', [$category_id]) }}" method="POST" >
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		@include('backend.category._form')
</form>
@stop
