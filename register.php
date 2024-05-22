<?php
    session_start();

    include("Form.php");

    if($_SERVER['REQUEST_METHOD']== "POST")
    {
      $first_name = $_POST['first_name'];
      $middle_name = $_POST['middle_name'];
      $last_name = $_POST['last_name'];
      $suffix = $_POST['suffix'];
      $street = $_POST['street'];
      $barangay = $_POST['barangay'];
      $municipality = $_POST['municipality'];
      $province = $_POST['province'];
      $contact = $_POST['contact'];
      $email = $_POST['email'];
      $status = $_POST['status'];
      $role = $_POST['role'];
      $password = $_POST['password'];

      if(!empty($email) && !empty($password) && !is_numeric ($email))
      {

        $query = "insert into tbl_users (first_name, middle_name, last_name, suffix, street, barangay, municipality, province, contact, email, status, role, password) values ('$first_name', '$middle_name', '$last_name', '$suffix', '$street', '$barangay', '$municipality', '$province', '$contact', '$email', '$status', '$role', '$password')";

        mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('Successfully Register')</script>";
         header("Location: admin/index.php");
                        exit();

      
      }
      else
      {
        echo "<script type='text/javascript'> alert('Plesase Enter Some Valid Information')</script>";


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
                    <label for="exampleInputFirstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="exampleInputFirstName" name="first_name" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputMiddleName" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="exampleInputMiddleName" name="middle_name" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputLastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputLastName" name="last_name" required>
                  </div>
                  <div class="mb-3">
                  <label>Suffix:</label>
                <select class="form-control" name="Suffix" required>
                  <option value="N/A">N/A</option>
                  <option value="Jr.">Jr.</option>
                  <option value="Sr.">Sr.</option>
                </select>
              </div>
                  <div class="mb-3">
                    <label for="exampleInputStreet" class="form-label">Street</label>
                    <input type="text" class="form-control" name="street" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputBarangay" class="form-label">Barangay</label>
                    <input type="text" class="form-control" name="barangay" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputMunicipality" class="form-label">Municipality</label>
                    <input type="text" class="form-control" name="municipality" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputProvince" class="form-label">Province</label>
                    <input type="text" class="form-control" name="province" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputNumber" class="form-label">Contact</label>
                    <input type="number" class="form-control" id="exampleInputNumber" name="contact" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Status</label>
                    <input type="text" class="form-control" id="exampleInputStatus" name="status" required>
                  </div>
                  <div class="mb-3">
                    <label>Role:</label>
                       <select class="form-control" name="Role" required>
                         <option value="Admin">Admin</option>
                  <option value="Doctor">Doctor</option>
                  <option value="Nurse">Nurse</option>
                  <option value="Staff">Staff</option>
                </select>
              </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" name="password" required>
                  </div>
                  <button  type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an account?</p>
                    <a class="text-primary fw-bold ms-2" href="index.php">Sign-in?</a>
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
