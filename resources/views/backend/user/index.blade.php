@extends('backend.master')

@section('title')
	<title>Users - Index</title>
@stop

@section('content-header')
	<!-- Content Header (Page header) -->
	<section class="content-header">
      <h1>
        Users Management
      </h1>
    </section>
@stop

@section('content')
		 <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</td>
                  <th>Email</td>
                  <th>First name</td>
                  <th>Last name</td>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
						<tr>
							<?php $user_id = $user->id ?>
							<td>{{ $user->id }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->first_name }}</td>
							<td>{{ $user->last_name }}</td>
							<td><a href="{{ url('backend/users/'.$user_id.'/edit') }}">
							Update</a></td>
							<td><a href="{{ url('backend/users/destroy', [$user_id]) }}" class="confirm">Delete</a></td>
						</tr>
				@endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</td>
                  <th>Email</td>
                  <th>First name</td>
                  <th>Last name</td>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
			<td>
      <!-- create url -->
				<a href="{{ url('backend/users/create') }}">
					<button type="submit" name="submit" class="btn btn-primary">Add a new user</button><br>
				</a>
			</td>
		</div>
            <!-- /.box-body -->
@stop