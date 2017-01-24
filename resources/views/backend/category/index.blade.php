@extends('backend.master')

@section('title')
	<title>Categories - Index</title>
@stop

@section('content-header')
	<!-- Content Header (Page header) -->
	<section class="content-header">
      <h1>
        Categories Management
      </h1>
    </section>
@stop

@section('content')
		 <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</td>
                  <th>Name</td>
                  <th>Description</td>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
						<tr>
							<?php $category_id = $category->id ?>
							<td>{{ $category->id }}</td>
							<td>{{ $category->name }}</td>
							<td>{{ $category->description }}</td>
							<td><a href="{{ url('backend/categories/'.$category_id.'/edit') }}">
							Update</a></td>
							<td><a href="{{ url('backend/categories/destroy', [$category_id]) }}" class="confirm">Delete</a></td>
						</tr>
				@endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</td>
                  <th>Name</td>
                  <th>Description</td>
                  <th></th>
                  <th></th> 
                </tr>
                </tfoot>
              </table>
			<td>
      <!-- create url -->
				<a href="{{ url('backend/categories/create') }}">
					<button type="submit" name="submit" class="btn btn-primary">Add a new category</button><br>
				</a>
			</td>
		</div>
            <!-- /.box-body -->
@stop