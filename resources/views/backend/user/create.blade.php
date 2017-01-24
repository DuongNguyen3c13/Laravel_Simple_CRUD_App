@extends('backend.master')

@section('title')
	<title>Add new user</title>
@stop

@section('box-header')
	<div class="box-header with-border">
      <h3 class="box-title">Add a new user</h3>
	</div>
    <!-- /.box-header -->
@stop

@section('content')

<!-- form start -->
<!-- store url -->
<form role="form" action="{{ url('backend/users') }}" method="POST" >
		{{ csrf_field() }}
		@include('backend.user._form')
</form>
@stop