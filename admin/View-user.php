<?php
  include 'header.php';
  $user_Users_id = $_GET['user_id'];
  $user = $function->GetUserInfo($user_Users_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">View User</h5>
      <a class="btn btn-primary" href="users.php">Back</a><br><br>
      <?php
         if($user)
           { 
            $user_id = $user->users_id;
            $user_First_name = $user->First_name;
            $user_Middle_name = $user->Middle_name;
            $user_Last_name = $user->Last_name;
            $user_Suffix = $user->Suffix;
            $user_Street = $user->Street;
            $user_Barangay = $user->Barangay;
            $user_Municipality = $user->Municipality;
            $user_Province = $user->Province;
            $user_Contact= $user->Contact;
            $user_Email = $user->Email;
            $user_Status = $user->Status;
            $user_Role = $user->Role;
            $user_Password = $user->Password;




            
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
            <form method="post" action="navigate.php?user_id=<?=$user_Users_id;?>">
              <div class="form-group">
                <label>First name:</label>
                <input type="text" class="form-control" name="First_name" value="<?=( $user_First_name )?  $user_First_name :'';?>" disabled ><br>
              </div>

              <div class="form-group">
                <label>Middle name:</label>
                <input type="text" class="form-control" name="Middle_name" value="<?=($user_Middle_name)?$user_Middle_name:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Last name:</label>
                <input type="text" class="form-control" name="Last_name" value="<?=($user_Last_name)?$user_Last_name:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Suffix</label>
                <select class="form-control" name="Suffix" disabled>
                  <option value="N/A">N/A</option>
                  <option value="Jr.">Jr.</option>
                  <option value="Sr.">Sr.</option>
                </select>
              </div>

              <div class="form-group">
                <label>Street:</label>
                <input type="text" class="form-control" name="Street" value="<?=($user_Street)?$user_Street:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Barangay:</label>
                <input type="text" class="form-control" name="Barangay" value="<?=($user_Barangay)?$user_Barangay:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Municipality:</label>
                <input type="text" class="form-control" name="Municipality" value="<?=($user_Municipality)?$user_Municipality:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Province:</label>
                <input type="text" class="form-control" name="Province" value="<?=($user_Province)?$user_Province:'';?>" disabled><br>
              </div>
              
              <div class="form-group">
                <label>Contact:</label>
                <input type="number" class="form-control" name="Contact" value="<?=($user_Contact)?$user_Contact:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" name="Email" value="<?=($user_Email)?$user_Email:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Status:</label>
                <input type="text" class="form-control" name="Status" value="<?=($user_Status)?$user_Status:'';?>" disabled><br>
              </div>

              <div class="form-group">
                <label>Role</label>
                <select class="form-control" name="Role" disabled>
                  <option value="Admin">Admin</option>
                  <option value="Doctor">Doctor</option>
                  <option value="Nurse">Nurse</option>
                  <option value="Staff">Staff</option>
                </select>
              </div>

              <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" name="Password" value="<?=($user_Password)?$user_Password:'';?>" disabled><br>
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