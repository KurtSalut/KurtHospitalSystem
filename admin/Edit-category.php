<?php
  include 'header.php';
  $Category_Category_id = $_GET['Category_id'];
  $Category = $function->GetCategoryInfo($Category_Category_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Update Category</h5>
      <a class="btn btn-primary" href="category.php">Back</a><br><br>
      <?php
         if($Category)
           { 
            $Category_Category_id       = $Category->Category_id;
            $Category_Category    = $Category->Category;
            




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
            <form method="post" action="navigate.php?Category_id=<?=$Category_Category_id;?>">
            <div class="form-group">
                <label>Category:</label>
                <select class="form-control" name="Category">
                  <option value="Private">Private</option>
                  <option value="Public">Public</option>
                  <option value="Executive">Executive</option>
                  <option value="Luxuryroom">Luxuryroom</option>
                  
                </select>
              </div>



             

              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-edit-category">Submit</button>

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