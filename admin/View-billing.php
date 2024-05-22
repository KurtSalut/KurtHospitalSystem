<?php
  include 'header.php';
  $Billing_Billing_id = $_GET['Billing_id'];
  $Billing = $function->GetBillingInfo($Billing_Billing_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">View Billing</h5>
      <a class="btn btn-primary" href="billing.php">Back</a><br><br>
      <?php
         if($Billing)
           { 
            $Billing_Billing_id  = $Billing->Billing_id;
            $Billing_First_name = $Billing->First_name;
            $Billing_Middle_name = $Billing->Middle_name;
            $Billing_Last_name = $Billing->Last_name;
            $Billing_Date = $Billing->Date;
            $Billing_Payment_option = $Billing->Payment_option;
            $Billing_Total_amount = $Billing->Total_amount;
            $Billing_Patient_id =$Billing->Patient_id;
            
            
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
            <form method="post" action="navigate.php?Billing_id=<?=$Billing_Billing_id;?>">
              <div class="form-group">
                <label>First name:</label>
                <input type="text" class="form-control" name="First_name" value="<?=( $Billing_First_name )?  $Billing_First_name :'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Middle name:</label>
                <input type="text" class="form-control" name="Middle_name" value="<?=($Billing_Middle_name)?$Billing_Middle_name:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Last name:</label>
                <input type="text" class="form-control" name="Last_name" value="<?=($Billing_Last_name)?$Billing_Last_name:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Date:</label>
                <input type="date" class="form-control" name="Date" value="<?=($Billing_Date)?$Billing_Date:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Payment option:</label>
                <input type="text" class="form-control" name="Payment_option" value="<?=($Billing_Payment_option)?$Billing_Payment_option:'';?>" disabled><br>
              </div>


              <div class="form-group">
                <label>Total amount:</label>
                <input type="number" class="form-control" name="Total_amount" value="<?=($Billing_Total_amount)?$Billing_Total_amount:'';?>" disabled>
              </div>

              <div class="form-group">
                <label>Patient id:</label>
                <input type="number" class="form-control" name="Patient_id" value="<?=($Billing_Patient_id)?$Billing_Patient_id:'';?>" disabled>
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