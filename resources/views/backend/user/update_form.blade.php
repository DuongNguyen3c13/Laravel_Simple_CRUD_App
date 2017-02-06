<div class="col-xs-8">
<!-- add to the form -->
  <div class="box-body">
    <div class="form-group">
      <label for="Email">Email address</label>
      <input type="email" class="form-control" name="email" value="{{ isset($user) ? $user->email :old('email') }}" placeholder="Email">
    </div>
     @if ($errors->has('email'))
            <span class="help-block" style="color:red;">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
      @endif
    <div class="form-group">
      <label for="First name">First name</label>
      <input type="text" class="form-control" name="first_name" value="{{ isset($user) ? $user->first_name : old('first_name') }}" placeholder="First name">
    </div>
    @if ($errors->has('first_name'))
            <span class="help-block" style="color:red;">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
      @endif
    <div class="form-group">
      <label for="Last name">Last name</label>
      <input type="text" class="form-control" name="last_name" value="{{ isset($user) ? $user->last_name :old('last_name') }}" placeholder="Last name">
    </div>
    @if ($errors->has('last_name'))
            <span class="help-block" style="color:red;">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
      @endif
  </div>
  <!-- /.box-body -->

  <div class="box-footer">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>