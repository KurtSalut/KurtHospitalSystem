<?php
  include 'header.php';
  $Patient_Patient_id = $_GET['patient_id'];
  $patient = $function->GetPatientInfo($Patient_Patient_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Update Patient</h5>
      <a class="btn btn-primary" href="patients.php">Back</a><br><br>
      <?php
         if($patient)
           { 
            $patient_Patient_id = $patient->Patient_id;
            $patient_First_name = $patient->First_name;
            $patient_Middle_name = $patient->Middle_name;
            $patient_Last_name = $patient->Last_name;
            $patient_Date_of_Birth = $patient->Date_of_Birth;
            $patient_Age = $patient->Age;
            $patient_Contact_number = $patient->Contact_number;
            $patient_Address = $patient->Address;
            


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
            <form method="post" action="navigate.php?patient_id=<?=$patient_Patient_id;?>">
              <div class="form-group">
                <label>First name:</label>
                <input type="text" class="form-control" name="First_name" value="<?=($patient_First_name)? $patient_First_name:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Middle name:</label>
                <input type="text" class="form-control" name="Middle_name" value="<?=($patient_Middle_name)?$patient_Middle_name:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Last name:</label>
                <input type="text" class="form-control" name="Last_name" value="<?=($patient_Last_name)?$patient_Last_name:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Date of Birth:</label>
                <input type="date" class="form-control" name="Date_of_Birth" value="<?=($patient_Date_of_Birth)?$patient_Date_of_Birth:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Age:</label>
                <input type="number" class="form-control" name="Age" value="<?=($patient_Age)?$patient_Age:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Contact number:</label>
                <input type="number" class="form-control" name="Contact_number" value="<?=($patient_Contact_number)?$patient_Contact_number:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Address:</label>
                <input type="text" class="form-control" name="Address" value="<?=($patient_Address)?$patient_Address:'';?>" disabled><br>
              </div>


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