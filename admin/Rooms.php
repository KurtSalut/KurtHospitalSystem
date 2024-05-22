<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Room</h5>
      <a class="btn btn-primary" href="Add-Room.php">Add</a><br><br>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <?php
                  $msg = Session::get("msg");
                  if(isset($msg)){
                    echo $msg;
                    Session::set("msg", NULL);
                  }
              ?> 
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark">
                  <tr>
                    <th>
                      <h6>Id</h6>
                    </th>
                    <th>
                      <h6>Room Type</h6>
                    </th>
                    <th>
                      <h6>Room number</h6>
                    </th>
                    <th>
                      <h6>Capacity</h6>
                    </th>
                    <th>
                      <h6>Patient id</h6>
                    </th>
                    <th>
                      <h6>Category id</h6>
                    </th>
                    <th>
                      <h6>Actions</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <?php                         
                          $i = 0;
                          $Rooms = $function->GetAllRoom();
                          if ($Rooms) {
                            foreach ($Rooms as $Room):
                              $Room_Room_id     = $Room['Room_id'];
                              $Room_Room_type   = $Room['Room_type'];
                              $Room_Room_number = $Room['Room_number']; 
                              $Room_Capacity    = $Room['Capacity'];
                              $Room_Patient_id  = $Room['Patient_id'];
                              $Room_Category_id = $Room['Category_id'];
                              $i++;
                            ?>
                          <tr>
                          <td><label><?=$i;?></label></td>                            
                          <td><label><?=$Room_Room_type;?></label></td>
                          <td><label><?=$Room_Room_number;?></label></td>
                          <td><label><?=$Room_Capacity;?></label></td>
                          <td><label><?=$Room_Patient_id;?></label></td>
                          <td><label><?=$Room_Category_id;?></label></td>
                          
                          <td>
                            <form method="post" action="navigate.php">
                              <a class="btn btn-primary" href="Edit-Room.php?Room_id=<?=$Room_Room_id;?>">Edit</a> &nbsp;
                              <input type="hidden" name="Room_id" value="<?=$Room_Room_id;?>">
                              <button class="btn btn-danger" type="submit" name="btn-delete-Rooms">Delete</button></td>
                            </form>
                          
                          </tr>

                      <?php
                            endforeach;
                          }
                        ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
  include 'footer.php';
?>
