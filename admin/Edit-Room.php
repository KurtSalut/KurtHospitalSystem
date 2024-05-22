<?php
  include 'header.php';
  $Room_Room_id = $_GET['Room_id'];
  $Room = $function->GetRoomInfo($Room_Room_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Update Room</h5>
      <a class="btn btn-primary" href="Rooms.php">Back</a><br><br>
      <?php
         if($Room)
           { 
            $Room_Room_id       = $Room->Room_id;
            $Room_Room_type     = $Room->Room_type;
            $Room_Room_number   = $Room->Room_number;
            $Room_Capacity      = $Room->Capacity;
            $Room_Patient_id    = $Room->Patient_id;
            $Room_Category_id   = $Room->Category_id;




        ?>
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
            <form method="post" action="navigate.php?Room_id=<?=$Room_Room_id;?>">
            <div class="form-group">
                <label>Room type:</label>
                <select class="form-control" name="Room_type">
                  <option value="Private">Private</option>
                  <option value="Public">Public</option>
                  <option value="Executive">Executive</option>
                  <option value="Luxuryroom">Luxuryroom</option>
                  
                </select>
              </div>
              
              <div class="form-group">
                <label>Room number:</label>
                <input type="number" class="form-control" name="Room_number" value="<?=($Room_Room_number)?$Room_Room_number:'';?>" required><br>
              </div>

              <div class="form-group">
                <label>Capacity:</label>
                <input type="number" class="form-control" name="Capacity" value="<?=($Room_Capacity)?$Room_Capacity:'';?>" required><br>
              </div>

              <div class="form-group">
                <label>Patient id:</label>
                <select class="form-control" name="Patient_id" required>
                <option><?=( $Room_Category_id )? $Room_Category_id :'';?></option>
                <?php                         
                          $i = 0;
                          $Keys = $function->GetAllPatientId();
                          if ($Keys) {
                            foreach ($Keys as $Key):
                              $Key_Patient_id     = ($Key['Patient_id']);
                              $Key_Last_name     = ($Key['Last_name']);

                             
                              $i++;
                          ?>  
                <option value="<?=$Key_Patient_id;?>"><?=$Key_Patient_id;?> - <?=$Key_Last_name;?></option>

                        <?php  
                            endforeach;
                          }
                        ?>
                        </select><br>
              </div>

              <div class="form-group">
                <label>Category id:</label>
                <select class="form-control" name="Category_id" required>
                <option><?=( $Room_Patient_id )? $Room_Patient_id :'';?></option>
                <?php                         
                          $i = 0;
                          $Keys = $function->GetAllCategoryId();
                          if ($Keys) {
                            foreach ($Keys as $Key):
                              $Key_Category_id     = $Key['Category_id'];
                              $Key_Category    = $Key['Category'];

                             
                              $i++;
                          ?>  
                <option value="<?=$Key_Category_id;?>"><?=$Key_Category_id;?> - <?=$Key_Category;?></option>

                        <?php  
                            endforeach;
                          }
                        ?>
                        </select><br><br>
              </div>



              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-edit-Room">Submit</button>

            </form>
          </div>
        </div>
      </div>
      <?php
        }
      ?>
    </div>
  </div>
</div>

<?php 
  include 'footer.php';
?>