<?php
  include 'header.php';
  $Medicine_Medicine_id = $_GET['Medicine_id'];
  $Medicine = $function->GetMedicineInfo($Medicine_Medicine_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Update Medicine</h5>
      <a class="btn btn-primary" href="medicine.php">Back</a><br><br>
      <?php
         if($Medicine)
           { 
            $Medicine_Medicine_id  = $Medicine->Medicine_id;
            $Medicine_Medicine_name = $Medicine->Medicine_name;
            $Medicine_Supply_id =$Medicine->Supply_id;
            
            
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
            <form method="post" action="navigate.php?Medicine_id=<?=$Medicine_Medicine_id;?>">
              <div class="form-group">
                <label>Medicine name:</label>
                <input type="text" class="form-control" name="Medicine_name" value="<?=( $Medicine_Medicine_name )?  $Medicine_Medicine_name :'';?>" required><br>
              </div>


              
          

              <div class="form-group">
                <label>Supply id:</label>
                <select class="form-control" name="Supply_id" required>
                <option><?=( $Medicine_Supply_id )?  $Medicine_Supply_id :'';?></option>
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

              

              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-edit-medicine">Submit</button>

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