<?php
  include 'header.php';
?>

<!-- Row 1 -->
<div class="row">
  <div class="col-lg-8 d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body">
        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
          <div class="mb-3 mb-sm-0">
            <h5 class="card-title fw-semibold">Hospital Overview</h5>
          </div>
          <div>
            <select class="form-select">
              <option value="1">May 2024</option>
              <option value="2">April 2024</option>
              <option value="3">March 2024</option>
              <option value="4">February 2024</option>
              <option value="5">January 2024</option>
            </select>
          </div>
        </div>
        <div id="chart"></div>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="row">
      <div class="col-lg-12">
        <!-- Yearly Statistics -->
        <div class="card overflow-hidden">
          <div class="card-body p-4">
            <h5 class="card-title mb-9 fw-semibold">Yearly Statistics</h5>
            <div class="row align-items-center">
              <div class="col-8">
                <h4 class="fw-semibold mb-3">Patients Treated: 12,358</h4>
                <div class="d-flex align-items-center mb-3">
                  <span class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                    <i class="ti ti-arrow-up-left text-success"></i>
                  </span>
                  <p class="text-dark me-1 fs-3 mb-0">+15%</p>
                  <p class="fs-3 mb-0">since last year</p>
                </div>
                <div class="d-flex align-items-center">
                  <div class="me-4">
                    <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                    <span class="fs-2">2024</span>
                  </div>
                  <div>
                    <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                    <span class="fs-2">2023</span>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="d-flex justify-content-center">
                  <div id="yearlyBreakup"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <!-- Monthly Admissions -->
        <div class="card">
          <div class="card-body">
            <div class="row align-items-start">
              <div class="col-8">
                <h5 class="card-title mb-9 fw-semibold">Monthly Admissions</h5>
                <h4 class="fw-semibold mb-3">1,820</h4>
                <div class="d-flex align-items-center pb-1">
                  <span class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                    <i class="ti ti-arrow-down-right text-danger"></i>
                  </span>
                  <p class="text-dark me-1 fs-3 mb-0">-5%</p>
                  <p class="fs-3 mb-0">since last month</p>
                </div>
              </div>
              <div class="col-4">
                <div class="d-flex justify-content-end">
                  <div class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                    <i class="ti ti-hospital fs-6"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="monthlyAdmissions"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
include 'footer.php';
?>
