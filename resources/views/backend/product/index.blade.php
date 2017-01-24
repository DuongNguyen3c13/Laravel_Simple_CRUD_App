@extends('backend.master')

@section('title')
  <title>Products - Index</title>
@stop

@section('content-header')
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
        Products Management
      </h1>
    </section>
@stop

@section('content')
     <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</td>
                  <th>Category</td>
                  <th>Name</td>
                  <th>Price</td>
                  <th>Sale price</th>
                  <th>Status</th>
                  <th>Image</th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
            <tr>
              <?php $product_id = $product->id ?>
              <td>{{ $product->id }}</td>
              <td>{{ $product->category->name }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->price }} $</td>
              <td>{{ $product->sale_price }}</td>
              <td>{{ $product->status }}</td>
              <td>
                @if(isset($product->image))
                  <!-- pop-up menu for image -->
                  <a onclick="window.open('{{ asset($product->image) }}', '{{ $product->name }} image');">
                      <img src="{{ asset($product->image) }}" 
                            alt="{{ $product->name }} img" 
                            height="40" width="60" 
                            class="img-responsive">
                  </a>
                @else
                  No image avaiable
                @endif
              </td>
              <td><a href="{{ url('backend/products/'.$product_id.'/edit') }}">
              Update</a></td>
              <td><a href="{{ url('backend/products/destroy', [$product_id]) }}" class="confirm">Delete</a></td>
            </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</td>
                  <th>Category</td>
                  <th>Name</td>
                  <th>Price</td>
                  <th>Sale price</th>
                  <th>Status</th>
                  <th>Image</th>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
      <td>
        <a href="{{ url('backend/products/create') }}">
          <button type="submit" name="submit" class="btn btn-primary">Add a new product</button><br>
        </a>
      </td>
    </div>
            <!-- /.box-body -->
@stop