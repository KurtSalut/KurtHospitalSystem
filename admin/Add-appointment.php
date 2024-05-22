<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Add Appointment</h5>
      <a class="btn btn-primary" href="appointment.php">Back</a><br><br>
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
                <form method="post" action="navigate.php">
              <div class="form-group">
                <label>Patient name:</label>
                <input type="text" class="form-control" name="Patient_name" required><br>
              </div>

              <div class="form-group">
                <label>Doctor name:</label>
                <input type="text" class="form-control" name="Doctor_name" required><br>
              </div>

              <div class="form-group">
                <label>Date:</label>
                <input type="date" class="form-control" name="Date" required><br>
              </div>

              <div class="form-group">
                <label>Time:</label>
                <input type="time" class="form-control" name="Time" required><br>
              </div>

              <div class="form-group">
                <label>Users id:</label>
                <select class="form-control" name="users_id" required>
                <option>Select Users id</option>
                <?php                         
                          $i = 0;
                          $Keys = $function->GetAllUsersId();
                          if ($Keys) {
                            foreach ($Keys as $Key):
                              $Key_users_id     = $Key['users_id'];
                              $Key_First_name     = $Key['First_name'];

                             
                              $i++;
                          ?>  
                <option value="<?=$Key_users_id;?>"><?=$Key_users_id;?> - <?=$Key_First_name;?></option>

                        <?php  
                            endforeach;
                          }
                        ?>
                        </select><br>
              </div>

              <div class="form-group">
                <label>Patient id:</label>
                <select class="form-control" name="Patient_id" required>
                <option>Select Patient id </option>
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

              
              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-add-appointment">Submit</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
  include 'footer.php';
?>