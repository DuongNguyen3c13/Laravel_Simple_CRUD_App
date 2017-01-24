@extends('backend.master')

@section('title')
	<title>Update user information</title>
@stop

@section('box-header')
	<div class="box-header with-border">
      <h3 class="box-title">Update user information</h3>
	</div>
    <!-- /.box-header -->
@stop

@section('content')

<!-- form start -->
<?php $user_id = $user->id ?>
<form role="form" action="{{ url('backend/users', [$user_id]) }}" method="POST" >
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		@include('backend.user.update_form')
</form>
@stop