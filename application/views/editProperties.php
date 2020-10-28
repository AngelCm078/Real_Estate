<div class="text-center">
    <h2>UPDATE PROPERTY</h2>
</div>
<form action="<?php echo base_url() . "UpdateProperties/update?id=" . $dataProperties->id ?>" method="post">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" id="title" value ="<?php echo $dataProperties->title ?>">
    </div>
    <div class="form-group">
        <label>Type</label>
        <select name="type" class="custom-select" id="type" value ="<?php echo $dataProperties->type ?>">
            <option selected>Select type of property</option>
            <option value="House">House</option>
            <option value="Room">Room</option>
            <option value="Hostal">Hostal</option>
        </select>
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="address" id="address" value ="<?php echo $dataProperties->address ?>">
    </div>
    <div class="form-group">
        <label>Num Rooms</label>
        <input type="number" class="form-control" name="rooms" id="rooms" value ="<?php echo $dataProperties->rooms ?>">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="number" class="form-control" name="price" id="price" value ="<?php echo $dataProperties->price ?>">
    </div>
    <div class="form-group">
        <label>Area</label>
        <input type="number" class="form-control" name="area" id="area" value ="<?php echo $dataProperties->area ?>">
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-success">Update Property</button>
    </div>
</form>