<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Supply</h5>
      <a class="btn btn-primary" href="Add-supply.php">Add</a><br><br>
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
                      <h6>Supply name</h6>
                    </th>              
                    <th>
                      <h6>Quantity</h6>
                    </th>
                    <th>
                      <h6>Supply type</h6>
                    </th>
                    <th>
                      <h6>Date received</h6>
                    </th>
                    <th>
                      <h6>Expiration date</h6>
                    </th>
                    
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <?php                         
                          $i = 0;
                          $Supplys = $function->GetAllSupply();
                          if ($Supplys) {
                            foreach ($Supplys as $Supply):
                              $Supply_id = $Supply['Supply_id'];
                              $Supply_Supply_name = $Supply['Supply_name'];
                              $Supply_Quantity= $Supply['Quantity']; 
                              $Supply_Supply_type = $Supply['Supply_type'];
                              $Supply_Date_received = $Supply['Date_received'];
                              $Supply_Expiration_date = $Supply['Expiration_date'];
                              
                              $i++;
                            ?>
                          <tr>
                          <td><label><?=$i;?></label></td>                            
                          <td><label><?=$Supply_Supply_name;?></label></td>
                          <td><label><?=$Supply_Quantity;?></label></td>
                          <td><label><?=$Supply_Supply_type;?></label></td>
                          <td><label><?=$Supply_Date_received;?></label></td>
                          <td><label><?=$Supply_Expiration_date;?></label></td>

                            <td>
                              <form method="post" action="navigate.php">
                                <a class="btn btn-primary" href="Edit-supply.php?Supply_id=<?=$Supply_id;?>">Edit</a> &nbsp;
                                <input type="hidden" name="Supply_id" value="<?=$Supply_id;?>">
                                <button class="btn btn-danger" type="submit" name="btn-delete-supply">Delete</button></td> 
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
