<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Add Medical</h5>
      <a class="btn btn-primary" href="medical.php">Back</a><br><br>
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
                <label>First name:</label>
                <input type="text" class="form-control" name="First_name" required><br>
              </div>

              <div class="form-group">
                <label>Middle name:</label>
                <input type="text" class="form-control" name="Middle_name" required><br>
              </div>

              <div class="form-group">
                <label>Last name:</label>
                <input type="text" class="form-control" name="Last_name" required><br>
              </div>

              <div class="form-group">
                <label>Diagnosis:</label>
                <input type="text" class="form-control" name="Diagnosis" required><br>
              </div>

              <div class="form-group">
                <label>Date:</label>
                <input type="date" class="form-control" name="Date" required><br>
              </div>


              

              <div class="form-group">
                <label>Patient id:</label>
                <select class="form-control" name="Patient_id" required>
                <option>Select Patient id</option>
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

              
              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-add-medical">Submit</button>

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