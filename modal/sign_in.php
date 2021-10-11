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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>
<body class="bg-default">
    <!-- Page content -->
        <form action="" method="post">
            <label for="">email:</label>
            <input type="text" name="email" id="">
            <label for="">password:</label>
            <input type="text" name="password" id="">
            <button name="login">login</button>
        </form>
        <?php
            include('../config.php');
            if (isset($_POST['login'])) {
                $email = $_POST['email'];  
                $password = $_POST['password'];  
              
                //to prevent from mysqli injection  
                $username = stripcslashes($email);  
                $password = stripcslashes($password);  
                $email = mysqli_real_escape_string($connect, $email);  
                $password = mysqli_real_escape_string($connect, $password);  
              
                $sql = "select * from user where email = '$email' and password = '$password'";  
                $result = mysqli_query($connect, $sql);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
                  
                if($count == 1){  
                    $_SESSION["username"] = $row['first_name'];
                    $_SESSION["position"] = $row['position'];
                    $_SESSION["userid"] = $row['user_id'];
                    $username = $_SESSION["username"];
                    $position = $_SESSION['position'];
                    $userid = $_SESSION["userid"];
                    // echo $username."</br>";
                    // echo $position."</br>";
                    if($position=="admin" && $row['status']=="active"){
                      //echo "am admin";
                      header("location: ../index.php");
                    }elseif($position=="officer"){
                      //echo "am officer";
                      header("location: ../officer/index.html");
                    }elseif($position=="operator"){
                      //echo "am operator";
                      header("location: ../operator/index.html");
                    }else{  
                    echo "<h1> Login failed. Invalid username or password. | account not active</h1>";  
                }  
            } 
          }    
        ?>
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
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>
</html>