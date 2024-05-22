<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Category</h5>
      <a class="btn btn-primary" href="Add-category.php">Add</a><br><br>
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
                      <h6>Category</h6>
                    </th>
                    <th>
                      <h6>Action</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <?php                         
                          $i = 0;
                          $Categorys = $function->GetAllCategory();
                          if ($Categorys) {
                            foreach ($Categorys as $Category):
                              $Category_Category_id     = $Category['Category_id'];
                              $Category_Category   = $Category['Category'];
                              $i++;
                            ?>
                          <tr>
                          <td><label><?=$i;?></label></td>                            
                          <td><label><?=$Category_Category;?></label></td>
                          
                          
                          <td>
                            <form method="post" action="navigate.php">
                              <a class="btn btn-primary" href="Edit-category.php?Category_id=<?=$Category_Category_id;?>">Edit</a> &nbsp;
                              <input type="hidden" name="Category_id" value="<?=$Category_Category_id;?>">
                              <button class="btn btn-danger" type="submit" name="btn-delete-category">Delete</button></td>
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
