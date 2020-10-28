<table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Type</th>
      <th scope="col">Address</th>
      <th scope="col">Rooms</th>
      <th scope="col">Price</th>
      <th scope="col">Area</th>
      <th scope="col">options</th>
    </tr>
  </thead>
  <tbody>
  <?php
            foreach($properties as $properti){

                $listProperties = "
                    <ul class='list-group list-group-horizontal-md'>
                        <li class='list-group-item'>$properti->title</li>
                        <li class='list-group-item'>$properti->type</li>
                        <li class='list-group-item'>$properti->address</li>
                        <li class='list-group-item'>$properti->rooms</li>
                        <li class='list-group-item'>$properti->price</li>
                        <li class='list-group-item'>$properti->area</li>
                        <li class='list-group-item'>
                        <center>
                            <a href='EditProperties/edit?id=$properti->id' class='btn btn-warning' class='btn btn-warning' title='Modify this record'><i class='fa fa-edit'></i></a> 
                            
                            <a href='DeleteProperties/delete?id={$properti->id}' class='btn btn-danger' title='Delete this record'><i class='fa fa-trash'></i></a>
                        
                        </center>                        
                        </li>
                    </ul>
                ";
                echo $listProperties;
            }            
            ?>
  </tbody>
</table>