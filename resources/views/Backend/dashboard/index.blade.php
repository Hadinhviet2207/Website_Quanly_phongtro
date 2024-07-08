<?php
// include "config.php";


// $query_show_emp= "select * from users ";
// $result_show_emp= mysqli_query($conn, $query_show_emp);
// $sql = "SELECT COUNT(id) AS customer_count FROM users";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
//     $customerCount = $row["customer_count"];
// } else {
//     $customerCount = 0;
// }

// $sql = "SELECT COUNT(id) AS boarding_count FROM save_table";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
//     $boardingCount = $row["boarding_count"];
// } else {
//     $boardingCount = 0;
// }

// $sql = "SELECT COUNT(id) AS message_count FROM contact_us";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
//     $messageCount = $row["message_count"];
// } else {
//     $messageCount = 0;
// }

// $sql = "SELECT COUNT(id) AS earn_count FROM save_table";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
//     $earnCount = $row["earn_count"];
// } else {
//     $earnCount = 0;
// }
?>



<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>QUẢN LÝ NHÀ TRỌ</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="/Website_Quanly_phongtro/public/backend/assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="/Website_Quanly_phongtro/public/backend/assets/css/style.css">
  <link rel="stylesheet" href="/Website_Quanly_phongtro/public/backend/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="/Website_Quanly_phongtro/public/backend/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='/Website_Quanly_phongtro/public/backend/assets/img/logo.png' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
        @include('Backend.dashboard.component.navbar')
        @include('Backend.dashboard.component.slidebar')
      

<!-- Main Content -->
      <div class="main-content">
        <section class="section">

              <!-- start card -->
              <div class="row ">
                <div class="col-xl-3 col-lg-6">
                  <div class="card l-bg-green">
                    <div class="card-statistic-3">
                      <div class="card-icon card-icon-large"><i class="fa fa-users"></i></div>
                      <div class="card-content">
                        <h4 class="card-title">Customers</h4>
                        <span>
                            1
                        </span>
                        <div class="progress mt-1 mb-1" data-height="8">
                          <div class="progress-bar l-bg-purple" role="progressbar" data-width="25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                  <div class="card l-bg-cyan">
                    <div class="card-statistic-3">
                      <div class="card-icon card-icon-large"><i class="fa fa-home"></i></div>
                      <div class="card-content">
                        <h4 class="card-title">Boarding Adds</h4>
                        <span>1</span>
                        <div class="progress mt-1 mb-1" data-height="8">
                          <div class="progress-bar l-bg-orange" role="progressbar" data-width="30%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                  <div class="card l-bg-purple">
                    <div class="card-statistic-3">
                      <div class="card-icon card-icon-large"><i class="fa fa-envelope"></i></div>
                      <div class="card-content">
                        <h4 class="card-title">Message</h4>
                        <span>1</span>
                        <div class="progress mt-1 mb-1" data-height="8">
                          <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                  <div class="card l-bg-orange">
                    <div class="card-statistic-3">
                      <div class="card-icon card-icon-large"><i class="fa fa-money-bill-alt"></i></div>
                      <div class="card-content">
                        <h4 class="card-title">Earning</h4>
                        <span>1</span>
                        <div class="progress mt-1 mb-1" data-height="8">
                          <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <!-- end card r-->

          <!-- start revenue chart -->
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
                <div class="card-header">
                  <h4>Revenue chart</h4>
                  <div class="card-header-action">
                    <div class="dropdown">
                      <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                      <div class="dropdown-menu">
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i>
                          Delete</a>
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary">View All</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-9">
                      <div id="chart1"></div>
                      <div class="row mb-0">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
                                class="col-green"></i>
                              <h5 class="mb-0 m-b-0">1</h5>
                              <p class="text-muted font-14 m-b-0">Full Earnings</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row mt-5">
                        <div class="col-7 col-xl-7 mb-3">Total customers</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">3</span>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">Total Income</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">3*2</span>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">Booking completed</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">3</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <!-- end revenue chart -->

          
        
        <!--start setting bar -->
        @include('Backend.dashboard.component.settingslidebar')
        <!--end setting bar -->

      </div><!--end main content div -->

          <!-- footer start-->
          @include('Backend.dashboard.component.footer')
          <!-- footer start-->


    </div>
  </div>
  @include('Backend.dashboard.component.script')
</body>
</html>