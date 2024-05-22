<?php
  include 'header.php';
  $Supply_Supply_id = $_GET['Supply_id'];
  $Supply = $function->GetSupplyInfo($Supply_Supply_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Update Supply</h5>
      <a class="btn btn-primary" href="supply.php">Back</a><br><br>
      <?php
         if($Supply)
           { 
            $Supply_Supply_id         = $Supply->Supply_id;
            $Supply_Supply_name       = $Supply->Supply_name;
            $Supply_Quantity          = $Supply->Quantity;
            $Supply_Supply_type       = $Supply->Supply_type;
            $Supply_Date_received     = $Supply->Date_received;
            $Supply_Expiration_date   = $Supply->Expiration_date;

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
            <form method="post" action="navigate.php?Supply_id=<?=$Supply_Supply_id;?>">
            <div class="form-group">
               

            <form method="post" action="navigate.php">
            <div class="form-group">
                <label>Supply name:</label>
                <select class="form-control" name="Supply_name">
                  <option value="Citalopram">Citalopram</option>
                  <option value="Tamoxifen">Tamoxifen</option>
                  <option value="Radiotherapy">Radiotherapy</option>
                  <option value="Ferrous Sulfate">Ferrous Sulfate</option>
                  
                </select>
              </div>

              <div class="form-group">
                <label>Quantity:</label>
                <input type="number" class="form-control" name="Quantity" value="<?=($Supply_Quantity)?$Supply_Quantity:'';?>" required><br>
              </div>

              <form method="post" action="navigate.php">
            <div class="form-group">
                <label>Supply type:</label>
                <select class="form-control" name="Supply_type">
                  <option value="Tablet">Tablet</option>
                  <option value="Liquid">Liquid</option>
                  <option value="Capsules">Capsules</option>                  
                </select>
              </div>

              <div class="form-group">
                <label>Date received:</label>
                <input type="date" class="form-control" name="Date_received" value="<?=($Supply_Date_received )?$Supply_Date_received:'';?>" required><br>
                
              </div>

              <div class="form-group">
                <label>Expiration date:</label>
                <input type="date" class="form-control" name="Expiration_date" value="<?=($Supply_Expiration_date )?$Supply_Expiration_date:'';?>" required><br>
                
              </div>


              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-edit-supply">Submit</button>

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