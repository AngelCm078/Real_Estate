

  <div class="text-center">
    <h2>NEW USER</h2>
  </div>

  <form onsubmit="return validate()" action="<?php echo base_url() . "Create_user/create" ?>" method="post">

    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="alert alert-danger" name="errorDataName" id="errorDataName" style="display: none;" role="alert"></div>

    <div class="form-group">
      <label>Lastname</label>
      <input type="text" class="form-control" name="lastname" id="lastname">
    </div>
    <div class="alert alert-danger" id="errorDataLastName" style="display: none;" role="alert"></div>

    <div class="form-group">
      <label>email</label>
      <input type="text" class="form-control" name="email" id="email">
    </div>
    <div class="alert alert-danger" id="errorDataEmail" style="display: none;" role="alert">

    </div>

    <div class="form-group">
      <label>Type_id</label>
      <select name="type_id" class="custom-select" id="type_id">
        <option selected>Select Type ID</option>
        <option value="1">CC: Identification card</option>
        <option value="2">PAS: Passport</option>
      </select>
    </div>
    <div class="alert alert-danger" id="errorDataTypeId" style="display: none;" role="alert">

    </div>

    <div class="form-group">
      <label>Identification</label>
      <input type="text" class="form-control" name="identification" id="identification">
    </div>
    <div class="alert alert-danger" id="errorDataIdentification" style="display: none;" role="alert">

    </div>

    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password_user" id="password_user">
    </div>
    <div class="alert alert-danger" id="errorDataPassword" style="display: none;" role="alert">

    </div>

    <div class="form-group text-center">
      <button type="submit" class="btn btn-success">Create User</button>
    </div>