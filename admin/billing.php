<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Billing</h5>
      <a class="btn btn-primary" href="Add-billing.php">Add</a><br><br>
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
                      <h6>Full name</h6>
                    </th>
                    <th>
                      <h6>Date</h6>
                    </th>
                    <th>
                      <h6>Payment option</h6>
                    </th>
                    <th>
                      <h6>Total amount</h6>
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
                          $Billings = $function->GetAllBilling();
                          if ($Billings) {
                            foreach ($Billings as $Billing):
                              $Billing_Billing_id     = $Billing['Billing_id'];
                              $Billing_First_name   = $Billing['First_name'];
                              $Billing_Middle_name = $Billing['Middle_name']; 
							  $Billing_Last_name = $Billing['Last_name']; 
                              $Billing_Date    = $Billing['Date'];
                              $Billing_Payment_option  = $Billing['Payment_option'];
                              $Billing_Total_amount = $Billing['Total_amount'];
                              $Billing_Patient_id = $Billing['Patient_id'];

                              $i++;
                            ?>
                          <tr>
                          <td><label><?=$i;?></label></td>                            
						  <td><label><?=$Billing_First_name;?>&nbsp;<?=$Billing_Middle_name;?>&nbsp;<?=$Billing_Last_name;?>&nbsp;</label></td>
                          <td><label><?=$Billing_Date;?></label></td>
                          <td><label><?=$Billing_Payment_option;?></label></td>
						  <td><label><?=$Billing_Total_amount;?></label></td>
                          <td><label><?=$Billing_Patient_id;?></label></td>

                          
                          <td>
                            <form method="post" action="navigate.php">
                             <a class="btn btn-success" href="View-billing.php?Billing_id=<?=$Billing_Billing_id;?>">View</a>
                              <a class="btn btn-primary" href="Edit-billing.php?Billing_id=<?=$Billing_Billing_id;?>">Edit</a> &nbsp;
                              <input type="hidden" name="Billing_id" value="<?=$Billing_Billing_id;?>">
                              <button class="btn btn-danger" type="submit" name="btn-delete-billing">Delete</button></td>
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
