<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Medical Records</h5>
      <a class="btn btn-primary" href="Add-medical.php">Add</a><br><br>
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
                      <h6>Full Name</h6>
                    </th>
                    <th>
                      <h6>Diagnosis</h6>
                    </th>
                    <th>
                      <h6>Date</h6>
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
                          $Records = $function->GetAllRecord();
                          if ($Records) {
                            foreach ($Records as $Record):
                              $Record_Record_id     = $Record['Record_id'];
                              $Record_First_name   = $Record['First_name'];
                              $Record_Middle_name = $Record['Middle_name']; 
                              $Record_Last_name    = $Record['Last_name'];
                              $Record_Diagnosis   = $Record['Diagnosis'];
                              $Record_Date  = $Record['Date'];
                              $Record_Patient_id = $Record['Patient_id'];

                              $i++;
                            ?>
                          <tr>
                          <td><label><?=$i;?></label></td>                            
                          <td><label><?=$Record_First_name;?>&nbsp;<?=$Record_Middle_name;?>&nbsp;<?=$Record_Last_name;?>&nbsp;</label></td>
                          <td><label><?=$Record_Diagnosis;?></label></td>
                          <td><label><?=$Record_Date;?></label></td>
                          <td><label><?=$Record_Patient_id;?></label></td>
                          
                          <td>
                            <form method="post" action="navigate.php">
                              <a class="btn btn-success" href="View-medical.php?Record_id=<?=$Record_Record_id;?>">View</a>
                              <a class="btn btn-primary" href="Edit-medical.php?Record_id=<?=$Record_Record_id;?>">Edit</a> &nbsp;
                              <input type="hidden" name="Record_id" value="<?=$Record_Record_id;?>">
                              <button class="btn btn-danger" type="submit" name="btn-delete-medical">Delete</button></td>
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
