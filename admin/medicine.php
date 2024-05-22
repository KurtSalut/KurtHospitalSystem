<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Medicine</h5>
      <a class="btn btn-primary" href="Add-medicine.php">Add</a><br><br>
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
                      <h6>Medicine Name</h6>
                    </th>
                    
                    <th>
                      <h6>Supply id</h6>
                    </th>
                    <th>
                      <h6>Actions</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <?php                         
                          $i = 0;
                          $Medicines = $function->GetAllMedicine();
                          if ($Medicines) {
                            foreach ($Medicines as $Medicine):
                              $Medicine_Medicine_id     = $Medicine['Medicine_id'];
                              $Medicine_Medicine_name   = $Medicine['Medicine_name'];
                              $Medicine_Supply_id = $Medicine['Supply_id'];

                              $i++;
                            ?>
                          <tr>
                          <td><label><?=$i;?></label></td>                            
                          <td><label><?=$Medicine_Medicine_name;?></label></td>
                          <td><label><?=$Medicine_Supply_id;?></label></td>
                          
                          <td>
                            <form method="post" action="navigate.php">
                              <a class="btn btn-primary" href="Edit-medicine.php?Medicine_id=<?=$Medicine_Medicine_id;?>">Edit</a> &nbsp;
                              <input type="hidden" name="Medicine_id" value="<?=$Medicine_Medicine_id;?>">
                              <button class="btn btn-danger" type="submit" name="btn-delete-medicine">Delete</button></td>
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
