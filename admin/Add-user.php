<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Add User</h5>
      <a class="btn btn-primary" href="users.php">Back</a><br><br>
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
                <label>Suffix:</label>
                <select class="form-control" name="Suffix">
                  <option value="N/A">N/A</option>
                  <option value="Jr.">Jr.</option>
                  <option value="Sr.">Sr.</option>
                </select>
              </div>

              <div class="form-group">
                <label>Street:</label>
                <input type="text" class="form-control" name="Street" required><br>
              </div>


              <div class="form-group">
                <label>Barangay:</label>
                <input type="text" class="form-control" name="Barangay" required><br>
              </div>

              <div class="form-group">
                <label>Municipality:</label>
                <input type="text" class="form-control" name="Municipality" required><br>
              </div>

              <div class="form-group">
                <label>Province:</label>
                <input type="text" class="form-control" name="Province" required><br>
              </div>

              <div class="form-group">
                <label>Contact:</label>
                <input type="number" class="form-control" name="Contact" required><br>
              </div>

              <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" name="Email" required><br>
              </div>

              <div class="form-group">
                <label>Status:</label>
                <input type="text" class="form-control" name="Status" required><br>
              </div>

              <div class="form-group">
                <label>Role:</label>
                <select class="form-control" name="Role">
                  <option value="Admin">Admin</option>
                  <option value="Doctor">Doctor</option>
                  <option value="Nurse">Nurse</option>
                  <option value="Staff">Staff</option>
                </select>
              </div><br>

              <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" name="Password" required><br>
              </div>





              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-add-user">Submit</button>

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