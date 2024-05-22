<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Users</h5>
      <a class="btn btn-primary" href="Add-user.php">Add</a><br><br>
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
                      <h6>Fullname</h6>
                    </th>
                    <th>
                      <h6>Complete Address</h6>
                    </th>

                    </th>
                  </tr>
                </thead>
                <tbody>

                  <?php                         
                          $i = 0;
                          $users = $function->GetAllUsers();
                          if ($users) {
                            foreach ($users as $user):
                              $user_id = $user['users_id'];
                              $user_First_name = $user['First_name'];
                              $user_Middle_name = $user['Middle_name']; 
                              $user_Last_name = $user['Last_name'];
                              $user_Suffix = $user['Suffix'];
                              $user_Street = $user['Street'];
                              $user_Barangay = $user['Barangay'];
                              $user_Municipality = $user['Municipality'];
                              $user_Province = $user['Province'];
                              $user_Contact = $user['Contact'];
                              $user_Email = $user['Email'];
                              $user_Status = $user['Status'];
                              $user_Role = $user['Role'];
                              $user_Password = $user['Password'];

                              $i++;

                              
                              
                            ?>
                            
                          <tr>
                          <td><label><?=$i;?></label></td>                            
                          <td><label><?=$user_First_name;?>&nbsp;<?=$user_Middle_name;?>&nbsp;<?=$user_Last_name;?>&nbsp;
                          <?php
                            if ($user_Suffix != "N/A"){
                              echo " ". $user_Suffix;
                            }else{
                              echo "&nbsp;";
                            }
                         ?>
                         </label></td>
                          <td><label><?=$user_Street;?>&nbsp;<?=$user_Barangay;?>&nbsp;<?=$user_Municipality;?>&nbsp;<?=$user_Province;?></label></td>
                          
                         


                            <td>
                              <form method="post" action="navigate.php">
                                <a class="btn btn-success" href="View-user.php?user_id=<?=$user_id;?>">View</a>
                                <a class="btn btn-primary" href="Edit-user.php?user_id=<?=$user_id;?>">Edit</a> &nbsp;
                                <input type="hidden" name="users_id" value="<?=$user_id;?>">
                                <button class="btn btn-danger" type="submit" name="btn-delete-user">Delete</button></td> 
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