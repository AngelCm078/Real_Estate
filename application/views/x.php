<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header text-center">
                <h4 class="card-title">MY PROPERTIES</h4>
            </div>
            <div class="card-body text-center">
                <ul class="list-group list-group-horizontal-md flex-fill">
                    <li class="list-group-item list-group-item-primary"><strong>Title</strong></li>
                    <li class="list-group-item list-group-item-primary"><strong>Type</strong></li>
                    <li class="list-group-item list-group-item-primary"><strong>Address</strong></li>
                    <li class="list-group-item list-group-item-primary"><strong>Rooms</strong></li>
                    <li class="list-group-item list-group-item-primary"><strong>Price</strong></li>
                    <li class="list-group-item list-group-item-primary"><strong>Area</strong></li>
                    <li class="list-group-item list-group-item-primary"><strong>Options</strong></li>

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
                <script type="text/javascript">
                    function confirmDelete() {
                        var respuesta = confirm("¿Are you sure you want to delete the property?")
                        if (respuesta == true) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                </script>

                <?php

                if (empty($properties)) { ?>
                    <div class="alert alert-danger" name="errorDataName" id="errorDataName" role="alert">
                        Please Create Property
                    </div>
                <?php
                } else {

                    foreach ($properties as $properti) {
                        $listProperties = "
                        <ul class='list-group list-group-horizontal-md'>
                            <li class='list-group-item'>$properti->title</li>
                            <li class='list-group-item'>$properti->type</li>
                            <li class='list-group-item'>$properti->address</li>
                            <li class='list-group-item'>$properti->rooms</li>
                            <li class='list-group-item'>$$properti->price</li>
                            <li class='list-group-item'>$properti->area Mt2</li>
                            <li class='list-group-item'>
                            <a href='EditProperties/edit?id=$properti->id' class='btn btn-warning' class='btn btn-warning' title='Modify this record'><i class='fa fa-edit'></i></a> 
                            
                            <a href='DeleteProperties/delete?id={$properti->id}' class='btn btn-danger' onclick ='return confirmDelete()' title='Delete this record'><i class='fa fa-trash'></i></a>
                            
                            </li>                            
                        </ul>
                    ";
                        echo $listProperties;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>


<table class="table table-striped" id="tabla-data">
    <thead>
        <tr>
            <th>
                <center>Title</center>
            </th>
            <th>
                <center>Type</center>
            </th>
            <th>
                <center>Address</center>
            </th>
            <th>
                <center>Rooms</center>
            </th>
            <th>
                <center>Price</center>
            </th>
            <th>
                <center>Area</center>
            </th>
            <th>
                <center>User</center>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (empty($users)) { ?>
            <div class="alert alert-danger" name="errorDataName" id="errorDataName" role="alert">
                Properties not available
            </div>
        <?php
        } else {
            foreach ($users as $user) {
                $listPropertiesUsers = "        
        <tr>
            <td><center>$user->title</center></td>
            <td><center>$user->type</center></td>
            <td><center>$user->address</center></td>
            <td><center>$user->rooms</center></td>
            <td><center>$$user->price</center></td>
            <td><center>$user->area Mt2</center></td>
            <td><center>$user->name</center></td>
             
            </tr>       
        ";

                echo $listPropertiesUsers;
            }
        }
        ?>

    </tbody>
</table>


<H1><center>MY PROPERTIES</center></H1>
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th scope="col"><center>Title</center></th>
      <th scope="col"><center>Type</center></th>
      <th scope="col"><center>Address</center></th>
      <th scope="col"><center>Rooms</center></th>
      <th scope="col"><center>Price</center></th>
      <th scope="col"><center>Area</center></th>
      <th scope="col"><center>options</center></th>
      
    </tr>
  </thead>

  <script type="text/javascript">
    function confirmDelete() {
      var respuesta = confirm("¿Are you sure you want to delete the property?")
      if (respuesta == true) {
        return true;
      } else {
        return false;
      }
    }
  </script>
  <tbody>
    <?php

    if (empty($properties)) { ?>
      <div class="alert alert-danger" name="errorDataName" id="errorDataName" role="alert">
        Please Create Property
      </div>
    <?php
    } else {

      foreach ($properties as $properti) {
        $listProperties = "
        <tr>
            <td><center>$properti->title</center></td>
            <td><center>$properti->type</center></td>
            <td><center>$properti->address</center></td>
            <td><center>$properti->rooms</center></td>
            <td><center>$$properti->price</center></td>
            <td><center>$properti->area Mt2</center></td>
            <td>
            <center>
            
            <a href='EditProperties/edit?id=$properti->id' class='btn btn-warning' class='btn btn-warning' title='Modify this record'><i class='fa fa-edit'></i></a> 
                            
            <a href='DeleteProperties/delete?id={$properti->id}' class='btn btn-danger' onclick ='return confirmDelete()' title='Delete this record'><i class='fa fa-trash'></i></a>
                        
            </center>                        
            </li>
        </ul>
    ";

        echo $listProperties;
      }
    }

    ?>
  </tbody>
</table>