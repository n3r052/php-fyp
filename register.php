<?php
require 'config.php';

$select = "SELECT * FROM user";
$result = mysqli_query($connect, $select);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Create new Account</title>
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

<script>
function myFunction() {
    alert("You have completed the registration porcess");
}
                </script>

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

                        <h2>Create New Account</h2>
                            <form action="register.php" method="post">

                            <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" placeholder="Email" type="text" id="email" name="email">
                            </div>
                            </div>

                            <input class="form-control" placeholder="first_name" type="text" id="first_name" name="first_name">
                            <input class="form-control" placeholder="last_name" type="text" id="last_name" name="last_name">
                            <!-- <input class="form-control" placeholder="status" type="text" id="status" name="status"> -->
                            <input class="form-control" placeholder="position" type="text" id="position" name="position">
                            <input class="form-control" placeholder="company" type="text" id="company" name="company">


                            <!-- <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" name="status" class="form-control">
                                <option> Please select status: </option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                            </div> -->
                            
                            <div id="select_box">
                            <select onchange="fetch_select(this.value);">
                            <option>Select state</option>
                            <?php
                            include 'config.php';

                            $sql = "SELECT status FROM user";
                            $result = $connect->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                            echo "<option>".$row['status']."</option>";
                            }}
                            ?>
                            </select>
                        </div>

                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Password" type="text" id="PASSWORD" name="PASSWORD">
                                </div>
                            </div>
                                    <p>By creating new account, you are agreeing to our  terms and conditions.</p>
                            <a href="login.php">Already sign up? Sign in</a>
                            

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4" name="submit">Submit</button>
                            </div>
                        </form>
                 </div>

    <?php
    if (isset($_POST['submit'])){
        $email= $_POST['email'];
        $first_name= $_POST['first_name'];
        $last_name= $_POST['last_name'];
        $status= $_POST['status'];
        $position= $_POST['position'];
        $company= $_POST['company'];
        $PASSWORD= $_POST['PASSWORD'];
        include "config.php";


        $sql = "SELECT status FROM user";
                            $result = $connect->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                            echo "<option>".$row['status']."</option>";
                            }}

            $sql = "INSERT INTO user(email, first_name, last_name, status, position, company, password) VALUES($email, $first_name, $last_name, $status, $position, $company, $PASSWORD)";
            if($connect->query($sql) === true){
                echo "success insert";
            
        }
    }
    ?> 
<div>

</body>
</html>
