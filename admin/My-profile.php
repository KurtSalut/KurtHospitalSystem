<?php
  include 'header.php';

?>

<!doctype html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Profile - Hospital Management System</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logos.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .container-fluid {
      padding: 20px;
    }
    .card {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border: none;
      border-radius: 8px;
    }
    .card-body img {
      border: 3px solid #007bff;
    }
    .card-title {
      font-size: 1.5rem;
      font-weight: bold;
    }
    .card-text {
      color: #6c757d;
    }
    .text-secondary {
      color: #6c757d !important;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .row.mb-3 {
      margin-bottom: 1rem !important;
    }
    .col-sm-3 h6 {
      font-weight: bold;
    }

  </style>
</head>



    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body text-center">
              <img src="../assets/images/profile/BiliranProvincialHospital-1.jpg" alt="" class="rounded-circle" width="200" height="200">
              <h4 class="card-title mt-2">Biliran Provincial Hospital</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hospital Information</h5>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Hospital Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                Biliran Provincial Hospital
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  BiliranProvincialHospital@example.com
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                (053) 500 9319
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  Phase II,Larrzaba Navl,Biliran
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>
  </div>
</div>

<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


</html>
