<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Add Patient</h5>
      <a class="btn btn-primary" href="patients.php">Back</a><br><br>
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
                <label>First name:</label>
                <input type="text" class="form-control" name="First_name" required><br>
              </div>

              <div class="form-group">
                <label>Middle name:</label>
                <input type="text" class="form-control" name="Middle_name" required><br>
              </div>

              <div class="form-group">
                <label>Last name:</label>
                <input type="text" class="form-control" name="Last_name" required><br>
              </div>

              <div class="form-group">
                <label>Date of Birth:</label>
                <input type="date" class="form-control" name="Date_of_Birth" required><br>
              </div>

              <div class="form-group">
                <label>Age:</label>
                <input type="number" class="form-control" name="Age" required><br>
              </div>

              <div class="form-group">
                <label>Contact number:</label>
                <input type="number" class="form-control" name="Contact_number" required><br>
              </div>

              <div class="form-group">
                <label>Address:</label>
                <input type="text" class="form-control" name="Address" required><br>
              </div>

             
            
              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-add-patient">Submit</button>

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