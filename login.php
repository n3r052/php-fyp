<?php
    $host= "localhost";
    $database = "fyp";
    $user= "root";
    $pass = "";
    session_start();
  // // Create connection
  $connect = new mysqli($host, $user, $pass, $database);
  // // Check connection
   if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
   }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Login</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default">
  
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-body px-lg-5 py-lg-5">

                        <form action="login.php" method="post">
                          <img src="assets/img/login.png" alt="" width="88%">

                            <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" placeholder="Email" type="text" name="email">
                            </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Password" type="password" name="password">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="login" class="btn btn-primary my-4" name="login">Sign in</button>
                            </div>

                          <p>Forgot <a href="modal/for_pass.php"> password?</a>.</p>

                        </form>
                        <?php
                            include('config.php');
                            if (isset($_POST['login'])) {
                            $email = $_POST['email'];  
                            $password = $_POST['password'];  
                                
                            //to prevent from mysqli injection  
                            $username = stripcslashes($email);  
                            $password = stripcslashes($password);  
                            $email = mysqli_real_escape_string($connect, $email);  
                            $password = mysqli_real_escape_string($connect, $password);  
                            
                            $sql = "SELECT user.user_id, user.first_name, user.last_name, user.email, user.status, user.position, user.company, profile.about, profile.profile, CONCAT(user.first_name, ' ', user.last_name) AS whole_name FROM user
                            INNER JOIN profile on user.user_id = profile.user_id
                            WHERE email = '$email' AND password= '$password'";  
                            $result = mysqli_query($connect, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  
                                
                            if($count == 1){  
                              $_SESSION["username"] = $row['first_name'];
                              $_SESSION["position"] = $row['position'];
                              $_SESSION["userid"] = $row['user_id'];
                              $_SESSION["profile_pic"] = $row['profile'];
                              
                              // $username = $_SESSION["username"];
                              // $position = $_SESSION['position'];
                              // $userid = $_SESSION["userid"];
          
                              $username = $row['first_name'];
                              $position = $row['position'];
                              $userid = $row['user_id'];
                              $profile_pic = $row['profile'];

                              if($position=="admin" && $row['status']=="active"){
                                // echo "am admin";
                                header("location: index.php");
                              }elseif($position=="officer"){
                                //echo "am officer";
                                header("location: officer/index.php");
                              }elseif($position=="operator"){
                                //echo "am operator";
                                header("location: operator/index.php");
                              }else{  
                              echo "<h1> Login failed. Invalid username or password. | account not active</h1>";  
                          }   
                            }  
                            else{  
                                echo "<h3> Login failed. Invalid username or password.</h3>";  
                        } 
                              }
                    ?>
                    </div>
                </div>
            </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
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
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>

  
</body>
</html>