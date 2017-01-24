@extends('backend.master')

@section('title')
	<title>Add Products</title>
@stop

@section('content-header')
	<!-- Content Header (Page header) -->
	<section class="content-header">
      <h1>
        Add a new product
      </h1>
    </section>
@stop

@section('content')

<!-- form start -->
<!-- store url -->
<form role="form" action="{{ url('backend/categories') }}" method="POST" >
		{{ csrf_field() }}
		@include('backend.category._form')
</form>
@stop