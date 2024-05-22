<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Patients</h5>
      <a class="btn btn-primary" href="Add-patient.php">Add</a><br><br>
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
                      <h6>Fullname</h6>
                    </th>              
                    <th>
                      <h6>Contact_number</h6>
                    </th>
                    <th>
                      <h6>Address</h6>
                    </th>
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <?php                         
                          $i = 0;
                          $patients = $function->GetAllPatients();
                          if ($patients) {
                            foreach ($patients as $patient):
                              $patient_id = $patient['Patient_id'];
                              $patient_First_name = $patient['First_name'];
                              $patient_Middle_name = $patient['Middle_name']; 
                              $patient_Last_name = $patient['Last_name'];
                              $patient_Date_of_Birth = $patient['Date_of_Birth'];
                              $patient_Age = $patient['Age'];
                              $patient_Contact_number = $patient['Contact_number'];
                              $patient_Address = $patient['Address'];
                              $i++;
                            ?>
                          <tr>
                          <td><label><?=$i;?></label></td>                            
                          <td><label><?=$patient_First_name;?>&nbsp;<?=$patient_Middle_name;?>&nbsp;<?=$patient_Last_name;?></label></td>
                          <td><label><?=$patient_Contact_number;?></label></td>
                          <td><label><?=$patient_Address;?></label></td>

                            <td>
                              <form method="post" action="navigate.php">
                                <a class="btn btn-success" href="View-patient.php?patient_id=<?=$patient_id;?>">View</a>
                                <a class="btn btn-primary" href="Edit-patient.php?patient_id=<?=$patient_id;?>">Edit</a> &nbsp;
                                <input type="hidden" name="Patient_id" value="<?=$patient_id;?>">
                                <button class="btn btn-danger" type="submit" name="btn-delete-patient">Delete</button></td> 
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
