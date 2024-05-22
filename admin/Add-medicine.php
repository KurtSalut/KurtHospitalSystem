<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Add Medicine</h5>
      <a class="btn btn-primary" href="medicine.php">Back</a><br><br>
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
                <label>Medicine name:</label>
                <select class="form-control" name="Medicine_name">
                  <option value="Citalopram">Citalopram</option>
                  <option value="Tamoxifen">Tamoxifen</option>
                  <option value="Metformin">Metformin</option>
                  <option value="Ferrous Sulfate">Ferrous Sulfate</option>
                  
                </select>
              </div>

                <div class="form-group">
                <label>Users id:</label>
                <select class="form-control" name="users_id" required>
                <option>Select Users id </option>
                <?php                         
                          $i = 0;
                          $Keys = $function->GetAllUsersId();
                          if ($Keys) {
                            foreach ($Keys as $Key):
                              $Key_users_id     = $Key['users_id'];
                             
                              $i++;
                          ?>  
                <option><?=$Key_users_id;?></option>

                        <?php  
                            endforeach;
                          }
                        ?>
                        </select><br>
              </div>

              <div class="form-group">
                <label>Supply_id:</label>
                <select class="form-control" name="Supply_id" required>
                <option>Select Supply id</option>
                <?php                         
                          $i = 0;
                          $Keys = $function->GetAllSupplyId();
                          if ($Keys) {
                            foreach ($Keys as $Key):
                              $Key_Supply_id     = $Key['Supply_id'];
                             
                              $i++;
                          ?>  
                <option><?=$Key_Supply_id;?></option>

                        <?php  
                            endforeach;
                          }
                        ?>
                        </select><br>
              </div>

              
              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-add-medicine">Submit</button>

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