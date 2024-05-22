<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Add Supply</h5>
      <a class="btn btn-primary" href="supply.php">Back</a><br><br>
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
                <input type="number" class="form-control" name="Quantity" required>
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
                <input type="date" class="form-control" name="Date_received" required><br>
              </div>

              <div class="form-group">
                <label>Expiration date:</label>
                <input type="date" class="form-control" name="Expiration_date" required><br>
              </div>

            
              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-add-supply">Submit</button>

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