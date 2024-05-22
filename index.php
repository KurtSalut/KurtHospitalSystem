<?php
    session_start();

    include("Form.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $email = $_POST['email'];
      $password = $_POST['password'];

      if(!empty($email) && !empty($password) && !is_numeric ($email))
      {
        $query = "select * from tbl_users password where email = '$email' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
          if($result && mysqli_num_rows($result) > 0)
          {
            $user_data = mysqli_fetch_assoc($result);

            if($user_data['Password'] == $password)
            {
              header("location: admin/index.php");
              die;
            }
          }
        }
        echo "<script type='text/javascript'> alert('wrong username or password')</script>";
      }
      else{
        echo "<script type='text/javascript'> alert('wrong username or password')</script>";

      }

    }

  ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hospital Management System</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/logos.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body> 
 
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="assets/images/hospital-management-system-logo-dark-2x.png" width="180" alt="">
                </a>
                <form method="POST">
                  
                 
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
                  </div>
                 
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                  </div>
                  
                  <button  type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign-in</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an account?</p>
                    <a class="text-primary fw-bold ms-2" href="register.php">Sign-up</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
