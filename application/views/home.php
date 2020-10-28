
    <div id="carousel1" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url(); ?>assets/img/Properties1.jpg" alt="" width="1110" height="500">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url(); ?>assets/img/Properties2.jpg" alt="" width="1110" height="500">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url(); ?>assets/img/Properties3.jpg" alt="" width="1110" height="500">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url(); ?>assets/img/Properties4.jpg" alt="" width="1110" height="500">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    

<br><br>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Order by</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">Desc</option>
    <option value="2">Asc</option>
  </select>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header text-center">
                <h1 class="card-title">All properties</h1>
            </div>
            <div class="card-body text-center">
                <ul class="list-group list-group-horizontal-md flex-fill">
                    <li class="list-group-item list-group-item-primary"><strong>Title</strong></li>
                    <li class="list-group-item list-group-item-primary"><strong>Type</strong></li>
                    <li class="list-group-item list-group-item-primary"><strong>Address</strong></li>
                    <li class="list-group-item list-group-item-primary"><strong>Rooms</strong></li>
                    <li class="list-group-item list-group-item-primary"><strong>Price</strong></li>
                    <li class="list-group-item list-group-item-primary"><strong>Area</strong></li>
                    <li class="list-group-item list-group-item-primary"><strong>User</strong></li>

                </ul>
                <ul class="list-group list-group-horizontal-md flex-fill">
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                </ul>
                <?php
                
                if (empty($users)) 
                {?>
                    <div class="alert alert-danger" name="errorDataName" id="errorDataName" role="alert">        
                    Properties not available    
                    </div>
                <?php
                } else {        
                    foreach ($users as $user) {
                    $listPropertiesUsers = "
                        <ul class='list-group list-group-horizontal-md'>
                            <li class='list-group-item'>$user->title</li>
                            <li class='list-group-item'>$user->type</li>
                            <li class='list-group-item'>$user->address</li>
                            <li class='list-group-item'>$user->rooms</li>
                            <li class='list-group-item'>$$user->price</li>
                            <li class='list-group-item'>$user->area Mt2</li>
                            <li class='list-group-item'>$user->name</li>                            
                        </ul>
                    ";
                    echo $listPropertiesUsers;
                }
            }
                ?>
            </div>
        </div>
    </div>
</div>