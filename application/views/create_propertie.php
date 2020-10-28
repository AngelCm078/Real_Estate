<div class="text-center">
    <h2>ADD PROPERTY</h2>
</div>

<form onsubmit="return validate_propertie()" action="<?php echo base_url() . "Create_propertie/create_property"?>" method="post">
    
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="alert alert-danger" name="errorDatatitle" id="errorDatatitle" style="display: none;" role="alert">        
    </div>

    <div class="form-group">
        <label>Type</label>
        <select name="type" class="custom-select" id="type">
            <option selected>Select type of property</option>
            <option value="House">House</option>
            <option value="Room">Room</option>
            <option value="Hostal">Hostal</option>
        </select>
    </div>
    <div class="alert alert-danger" id="errorDataType" style="display: none;" role="alert">
        
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="address" id="address">
    </div>
    <div class="alert alert-danger" id="errorDataaddress" style="display: none;" role="alert">        
    </div>

    <div class="form-group">
        <label>Num Rooms</label>
        <input type="number" class="form-control" name="rooms" id="rooms">
    </div>
    <div class="alert alert-danger" id="errorDatarooms" style="display: none;" role="alert">
        
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="number" class="form-control" name="price" id="price">
    </div>
    <div class="alert alert-danger" id="errorDataprice" style="display: none;" role="alert">
        
    </div>
    <div class="form-group">
        <label>Area</label>
        <input type="number" class="form-control" name="area" id="area">
    </div>
    <div class="alert alert-danger" id="errorDataarea" style="display: none;" role="alert">
       
    </div>
    <div class="form-group">
        <input style="visibility:hidden" type="number" value="<?php echo $_SESSION['s_id']; ?>" class="form-control" name="user" id="user">
    </div>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-success">Create Property</button>
    </div>
</form>


