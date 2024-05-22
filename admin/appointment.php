<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Appointment</h5>
      <a class="btn btn-primary" href="Add-appointment.php">Add</a><br><br>
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
                      <h6>Patient Name</h6>
                    </th>
                    <th>
                      <h6>Doctor Name</h6>
                    </th>
                    <th>
                      <h6>Date</h6>
                    </th>
                    <th>
                      <h6>Time</h6>
                    </th>
                    <th>
                      <h6>User id</h6>
                    </th>
                    <th>
                      <h6>Patient id</h6>
                    </th>
                    
                    <th>
                      <h6>Actions</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <?php                         
                          $i = 0;
                          $Appointments = $function->GetAllAppointment();
                          if ($Appointments) {
                            foreach ($Appointments as $Appointment):
                              $Appointment_Appointment_id     = $Appointment['Appointment_id'];
                              $Appointment_Patient_name   = $Appointment['Patient_name'];
                              $Appointment_Doctor_name = $Appointment['Doctor_name']; 
                              $Appointment_Date    = $Appointment['Date'];
                              $Appointment_Time  = $Appointment['Time'];
                              $Appointment_users_id = $Appointment['users_id'];
                              $Appointment_Patient_id = $Appointment['Patient_id'];

                              $i++;
                            ?>
                          <tr>
                          <td><label><?=$i;?></label></td>                            
                          <td><label><?=$Appointment_Patient_name;?></label></td>
                          <td><label><?=$Appointment_Doctor_name;?></label></td>
                          <td><label><?=$Appointment_Date;?></label></td>
                          <td><label><?=$Appointment_Time;?></label></td>
                          <td><label><?=$Appointment_users_id;?></label></td>
                          <td><label><?=$Appointment_Patient_id;?></label></td>

                          
                          <td>
                            <form method="post" action="navigate.php">
                              <a class="btn btn-primary" href="Edit-Appointment.php?Appointment_id=<?=$Appointment_Appointment_id;?>">Edit</a> &nbsp;
                              <input type="hidden" name="Appointment_id" value="<?=$Appointment_Appointment_id;?>">
                              <button class="btn btn-danger" type="submit" name="btn-delete-appointment">Delete</button></td>
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
