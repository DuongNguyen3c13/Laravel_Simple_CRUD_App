<div class="col-xs-8">
<!-- add to the form -->
  <div class="box-body">
    <div class="form-group">
      <label for="Name">Name *</label>
      <input type="text" class="form-control" name="name" maxlength="255" value="{{ isset($category) ? $category->name :old('category') }}" placeholder="Name" required>
    </div>
    <div class="form-group">
      <label for="Description">Description</label>
      <textarea class="form-control" rows="3" maxlength="300" name="description" placeholder="Category description ...">{{ isset($category) ? $category->description : old('category') }}</textarea>
    </div>
  <!-- /.box-body -->

  <div class="box-footer">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>