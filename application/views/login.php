
  <form method="post" action="<?php echo base_url() . 'Validate' ?>">
    <div class="form-group">
      <label>Email</label>
      <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password_user">
    </div>
    <div class="form-group text-center">
      <button name="singin" type="submit" class="btn btn-primary">Sign in</button>
      &nbsp;
      <a href="<?php echo base_url() . "Create_user"; ?> " class="btn btn-success">Sign Up</a>
    </div>
  </form>