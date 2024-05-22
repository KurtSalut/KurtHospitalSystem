<?php
  include 'header.php';
  $Record_Record_id = $_GET['Record_id'];
  $Record = $function->GetMedicalInfo($Record_Record_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">View Medical Records</h5>
      <a class="btn btn-primary" href="medical.php">Back</a><br><br>
      <?php
         if($Record)
           { 
            $Record_Record_id  = $Record->Record_id;
            $Record_First_name = $Record->First_name;
            $Record_Middle_name = $Record->Middle_name;
            $Record_Last_name = $Record->Last_name;
            $Record_Diagnosis = $Record->Diagnosis;
            $Record_Date = $Record->Date;
            $Record_Patient_id =$Record->Patient_id;
            
            
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
            <form method="post" action="navigate.php?Record_id=<?=$Record_Record_id;?>">
              <div class="form-group">
                <label>First name:</label>
                <input type="text" class="form-control" name="First_name" value="<?=( $Record_First_name )?  $Record_First_name :'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Middle name:</label>
                <input type="text" class="form-control" name="Middle_name" value="<?=($Record_Middle_name)?$Record_Middle_name:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Last name:</label>
                <input type="text" class="form-control" name="Last_name" value="<?=($Record_Last_name)?$Record_Last_name:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Diagnosis:</label>
                <input type="text" class="form-control" name="Diagnosis" value="<?=($Record_Diagnosis)?$Record_Diagnosis:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Date:</label>
                <input type="date" class="form-control" name="Date" value="<?=($Record_Date)?$Record_Date:'';?>" disabled><br>
              </div>


             

              <div class="form-group">
                <label>Patient id:</label>
                <input type="number" class="form-control" name="Patient_id" value="<?=($Record_Patient_id)?$Record_Patient_id:'';?>" disabled>
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