<div class="col-xs-8">
  <!-- add to the form -->
  <div class="box-body">
    <div class="form-group">
      <label for="Name">Name *</label>
      <input type="text" class="form-control" name="name" maxlength="200" value="{{ isset($product->name) ? $product->name: old('name') }}" placeholder="Name">
    </div>
    @if ($errors->has('name'))
    <span class="help-block" style="color:red;">
      <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif

    <div class="form-group">
     <label>Category *</label>
     <select class="form-control" name="category_id">
      <!-- does not word -->
      @if(isset($categories))
        @foreach($categories as $category)
          @if (isset($product) && $category->id == $product->category_id)
          <option value="{{ $category->id }}" selected>{{  $category->name }}</option>
          @else
          <option value="{{ $category->id }}">{{  $category->name }}</option>
          @endif
        @endforeach
      @endif
    </select>
  </div>

  <div class="form-group">
    <label for="Phone">Price *</label>
    <input type="text" class="form-control" name="price" maxlength="30"  value="{{ isset($product) ? $product->price : old('price') }}" placeholder="Price" >
  </div>
  @if ($errors->has('price'))
  <span class="help-block" style="color:red;">
    <strong>{{ $errors->first('price') }}</strong>
  </span>
  @endif

  <div class="form-group">
    <label for="Phone">Sale Price </label>
    <input type="text" class="form-control" name="sale_price" maxlength="30"  value="{{ isset($product) ? $product->sale_price : old('sale_price') }}" placeholder="Sale Price">
  </div>
  @if ($errors->has('sale_price'))
  <span class="help-block" style="color:red;">
    <strong>{{ $errors->first('sale_price') }}</strong>
  </span>
  @endif

  <div class="form-group">
    <label for="Description">Description *</label>
    <textarea class="form-control" rows="3" maxlength="500" name="description" placeholder="Product description ...">{{ isset($product) ? $product->description : old('description') }}</textarea>
  </div>
  @if ($errors->has('description'))
  <span class="help-block" style="color:red;">
    <strong>{{ $errors->first('description') }}</strong>
  </span>
  @endif

  <div class="form-group">
    <label>Status *</label>
    <select class="form-control" name="status">
      @if (isset($product) && $product->status == "unavailable")
      <option value="available" >Available</option>
      <option value="unavailable" selected>Unavailable</option>
      @else
      <option value="available" selected>Available</option>
      <option value="unavailable">Unavailable</option>
      @endif 
    </select>
  </div>
  
  <div class="form-group">
    <label for="Image">Image *</label>
    <input type="file" name="image">
    <!-- check if updating or creating -->
    <!-- show image if updating -->
    @if(isset($product->image))
    <p>Current product image:</p>
    <a href="#" onclick="window.open('{{ asset($product->image) }}', '{{ $product->name }} image');">
      <img src="{{ asset($product->image) }}" 
      alt="{{ $product->name }} img" 
      height="100" width="100" 
      class="img-responsive">
    </a>
    @endif
  </div>
  @if ($errors->has('image'))
  <span class="help-block" style="color:red;">
    <strong>{{ $errors->first('image') }}</strong>
  </span>
  @endif

</div>
<!-- /.box-body -->

<div class="box-footer">
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</div>