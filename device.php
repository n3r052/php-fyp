<?php
    require 'config.php';
    session_start();
    $username = $_SESSION["username"];
    $position = $_SESSION['position'];
    $userid = $_SESSION["userid"];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Device List</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav ---------------------------------------------------------------------------------------------------------------------------------------------->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="#" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">

          <?php
              if($position == "admin"){
                //echo "am admin";
                echo " 
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"index.php\">
                  <i class=\"ni ni-tv-2 text-primary\"></i>
                  <span class=\"nav-link-text\">Dashboard</span>
                </a>
              </li>

              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"admin/user_list.php\">
                  <i class=\"ni ni-bullet-list-67 text-default\"></i>
                  <span class=\"nav-link-text\">User List</span>
                </a>
              </li>
  
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"report.php\">
                  <i class=\"ni ni-bullet-list-67 text-default\"></i>
                  <span class=\"nav-link-text\">Compose Report</span>
                </a>
              </li>

              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"documents.php\">
                  <i class=\"ni ni-bullet-list-67 text-default\"></i>
                  <span class=\"nav-link-text\">Document</span>
                </a>
              </li>

              <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"device.php\">
                  <i class=\"ni ni-pin-3 text-primary\"></i>
                  <span class=\"nav-link-text\">Device List</span>
                </a>
              </li>
                ";
              }elseif($position == "operator"){
               // echo "am operator";

                echo " 
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"operator/index.php\">
                  <i class=\"ni ni-tv-2 text-primary\"></i>
                  <span class=\"nav-link-text\">Dashboard</span>
                </a>
              </li>
  
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"report.php\">
                  <i class=\"ni ni-bullet-list-67 text-default\"></i>
                  <span class=\"nav-link-text\">Compose Report</span>
                </a>
              </li>
  
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"documents.php\">
                  <i class=\"ni ni-bullet-list-67 text-default\"></i>
                  <span class=\"nav-link-text\">Documents</span>
                </a>
              </li>
  
              <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"device.php.\">
                  <i class=\"ni ni-pin-3 text-primary\"></i>
                  <span class=\"nav-link-text\">Device</span>
                </a>
              </li>
                ";
              }elseif($position == "officer"){
                //echo "am officer";
                echo " 
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"officer/index.php\">
                  <i class=\"ni ni-tv-2 text-primary\"></i>
                  <span class=\"nav-link-text\">Dashboard</span>
                </a>
              </li>
  
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"report.php\">
                  <i class=\"ni ni-bullet-list-67 text-default\"></i>
                  <span class=\"nav-link-text\">Compose Report</span>
                </a>
              </li>
                ";
              }
            ?>

          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <!-- <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form> -->
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
          </ul>
          <!-- User Icon -------------------------------------------------------------------------------------------------------------->
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/theme/team-6.jpg">
                  </span>
                  <!-- User Name -->
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">John Doe</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="modal/logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -------------------------------------------------------------------------------->
    <!-- Header -------------------------------------------------------------------------------->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Device</h6>
            <!-- <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
            </nav> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page content ------------------------------------------------------------------------------------------------------------------------------>
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Documents</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <th scope="col" class="sort" data-sort="name">Name</th>
                    <th scope="col" class="sort" data-sort="ssid">Location</th>
                    <th scope="col" class="sort" data-sort="protocol">Latitude</th>
                    <th scope="col" class="sort" data-sort="location">Longitude</th>
                    <th scope="col" class="sort" data-sort="activity">Imgtaken</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?php
                        $sql = "SELECT * FROM device";
                          $result = $connect->query($sql);
                          if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = $result->fetch_assoc()) {
                          //First Row
                          echo "<tr>";
                            //First Column
                            echo "<td scope=\"row\">

                            <div class=\"media-body\">
                                <span class=\"name mb-0 text-sm\"> ".$row['device_id']. "</span>
                            </div>
                        </td>";

                            //Second Column
                            echo "<td>
                            <div class=\"media-body\">
                                <span class=\"name mb-0 text-sm\"> ".$row['location']. "</span>
                            </div>
                        </td>";

                            //Third Column
                            echo "<td>
                            <div class=\"media-body\">
                                <span class=\"name mb-0 text-sm\"> ".$row['latitude']. "</span>
                            </div>
                        </td>";

                            //Fourth Column
                            echo "<td>
                            <div class=\"media-body\">
                                <span class=\"name mb-0 text-sm\"> ".$row['longtitude']. "</span>
                            </div>
                        </td>";


                            //Fifth Column
                            echo "<td>
                            <div class=\"media-body\">
                                <span class=\"name mb-0 text-sm\"> ".$row['Imgtaken']. "</span>
                            </div>
                        </td>";

                            //Burger
                            echo "<td class=\"text-right\">
                              <div class=\"dropdown\">
                                <a class=\"btn btn-sm btn-icon-only text-light\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                  <i class=\"fas fa-ellipsis-v\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-arrow\">
                                  <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#edit-dev-form\">Edit</a>
                                  <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#modal-notification\">Delete</a>
                                  <a class=\"dropdown-item\" href=\"#\">Send</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                        ";
                      }
                    }
                  ?>
                </tbody>
              </table>
            </div>

            <!-- Edit Modal -->
            <form action="device.php" method="post">
  <div class="modal fade" id="edit-dev-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Device information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
            <div class="form-group">
              <!-- <i class="fas fa-user prefix grey-text"></i> -->
              <label for="device_id" class="col-form-label">Device ID:</label>
              <input type="text" class="form-control" id="device_id" name="device_id" placeholder="device_id">
            </div>

            <div class="form-group">
              <label for="location" class="col-form-label">Location:</label>
              <input type="text" class="form-control" id="location" name="location" placeholder="location">
            </div>

            <div class="form-group">
              <label for="latitude" class="col-form-label">Latitude:</label>
              <input type="text" class="form-control" id="latitude" name="latitude" placeholder="latitude">
            </div>

            <div class="form-group">
              <label for="longtitude" class="col-form-label">Longtitude:</label>
              <input type="text" class="form-control" id="longtitude" name="longtitude" placeholder="longtitude">
            </div>

            <div class="form-group">
              <label for="Imgtaken" class="col-form-label">Image taken:</label>
              <input type="text" class="form-control" id="Imgtaken" name="Imgtaken" placeholder="Imgtaken">
            </div>
          
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="save" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div>
  </form>

            <!-- Delete Modal -->
            <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
              <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                  <div class="modal-content bg-gradient-danger">
                    
                      <div class="modal-header">
                          <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                      </div>
                      
                      <div class="modal-body">
                        
                          <div class="py-3 text-center">
                              <i class="fas fa-ban fa-3x"></i>
                              <h4 class="heading mt-4">Are you Sure?</h4>
                              <p>Do you really want to delete these records? This process cannot be undone</p>
                          </div>
                          
                      </div>
                      
                      <div class="modal-footer">
                          <button type="button" class="btn btn-white">Ok, Got it</button>
                          <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Cancel</button>
                      </div>
                      
                  </div>
              </div>
          </div>

            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
      
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

<?php
 if (isset($_POST['save'])){
  $device_id= $_POST['device_id'];
  $location= $_POST['location'];
  $latitude= $_POST['latitude'];
  $longtitude= $_POST['longtitude'];
  $Imgtaken= $_POST['Imgtaken'];
  include "config.php";
        
  $query = "UPDATE `device` SET 
  `device_id`='". $device_id ."', 
  `location`='". $location ."', 
  `latitude`='". $latitude ."', 
  `longtitude`='". $longtitude ."', 
  `Imgtaken`='". $Imgtaken ."'
  
  WHERE `device_id`='". 'user.device_id' ."'";

  }
  ?>
</html>
