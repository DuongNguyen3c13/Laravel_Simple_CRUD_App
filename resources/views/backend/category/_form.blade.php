<div class="col-xs-8">
<!-- add to the form -->
  <div class="box-body">
    <div class="form-group">
      <label for="Name">Name *</label>
      <input type="text" class="form-control" name="name" value="{{ isset($category) ? $category->name :old('category') }}" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="Description">Description</label>
      <textarea class="form-control" rows="3" maxlength="300" name="description" placeholder="Category description ...">{{ isset($category) ? $category->description : old('description') }}</textarea>
    </div>
  <!-- /.box-body -->

  <div class="box-footer">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>