<?php
  include 'header.php';
  $Appointment_Appointment_id = $_GET['Appointment_id'];
  $Appointment = $function->GetAppointmentInfo($Appointment_Appointment_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Update Appointment</h5>
      <a class="btn btn-primary" href="appointment.php">Back</a><br><br>
      <?php
         if($Appointment)
           { 
            $Appointment_id = $Appointment->Appointment_id;
            $Appointment_Patient_name = $Appointment->Patient_name;
            $Appointment_Doctor_name = $Appointment->Doctor_name;
            $Appointment_Date = $Appointment->Date;
            $Appointment_Time = $Appointment->Time;
            $Appointment_users_id = $Appointment->users_id;
            $Appointment_Patient_id =$Appointment->Patient_id;
            
            
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
            <form method="post" action="navigate.php?Appointment_id=<?=$Appointment_Appointment_id;?>">
              <div class="form-group">
                <label>Patient name:</label>
                <input type="text" class="form-control" name="Patient_name" value="<?=( $Appointment_Patient_name )?  $Appointment_Patient_name :'';?>" required><br>
              </div>

              <div class="form-group">
                <label>Doctor name:</label>
                <input type="text" class="form-control" name="Doctor_name" value="<?=($Appointment_Doctor_name)?$Appointment_Doctor_name:'';?>" required><br>
              </div>

              <div class="form-group">
                <label>Date:</label>
                <input type="date" class="form-control" name="Date" value="<?=($Appointment_Date)?$Appointment_Date:'';?>" required><br>
              </div>

              
              <div class="form-group">
                <label>Time:</label>
                <input type="time" class="form-control" name="Time" value="<?=($Appointment_Time)?$Appointment_Time:'';?>" required><br>
              </div>

              <div class="form-group">
                <label>Users id:</label>
                <select class="form-control" name="users_id" required>
                <option><?=($Appointment_users_id)?$Appointment_users_id:'';?></option>
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
                <option><?=($Appointment_Patient_id)?$Appointment_Patient_id:'';?></option>
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

              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-edit-appointment">Submit</button>

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