<?php
if(isset($_POST['password']) && $_POST['reset_link_token'] && $_POST['email'])
{
include "config.php";
$emailId = $_POST['email'];
$token = $_POST['reset_link_token'];
$password = md5($_POST['password']);
$query = mysqli_query($connect,"SELECT * FROM `user` WHERE `reset_link_token`='".$token."' and `email`='".$email."'");
$row = mysqli_num_rows($query);
if($row){
mysqli_query($connect,"UPDATE user set  password='" . $password . "', reset_link_token='" . NULL . "' ,exp_date='" . NULL . "' WHERE email='" . $email . "'");
echo '<p>Congratulations! Your password has been updated successfully.</p>';
}else{
echo "<p>Something goes wrong. Please try again</p>";
}
}
?>