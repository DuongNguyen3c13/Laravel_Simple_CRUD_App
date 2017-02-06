<div class="col-xs-8">
<!-- add to the form -->
  <div class="box-body">
    <div class="form-group">
      <label for="Email">Email address *</label>
      <input type="email" class="form-control" name="email" maxlength="40" value="{{ isset($user) ? $user->email :old('email') }}" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="Password">Password *</label>
      <input type="password" class="form-control" name="password" maxlength="30" placeholder="Password" >
    </div>
    <div class="form-group">
      <label for="First name">First name *</label>
      <input type="text" class="form-control" name="first_name" value="{{ isset($user) ? $user->first_name : old('first_name') }}" placeholder="First name" >
    </div>
    <div class="form-group">
      <label for="Last name">Last name *</label>
      <input type="text" class="form-control" name="last_name" maxlength="30" value="{{ isset($user) ? $user->last_name :old('last_name') }}" placeholder="Last name" >
    </div>
  </div>
  <!-- /.box-body -->

  <div class="box-footer">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>