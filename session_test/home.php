<?php
    include '../config.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../modal/logout.php"></a>
    <?php
        echo $_SESSION["username"];
        echo $_SESSION["position"];
        // echo $username;
        // echo $position;

        // $username = $_SESSION["username"];
        // $sql = "SELECT * FROM user 
        //         WHERE first_name = '$username' AND ";
        //     $result = $connect->query($sql);
        //     if ($result->num_rows > 0) {
        //         // output data of each row
        //         while($row = $result->fetch_assoc()) {
                    
        //                 echo "<p>".$row['user_id']."</p>";
        //                 echo "<p>".$row['first_name']."</p>";
        //                 echo "<p>".$row['last_name']."</p>";
        //                 echo "<p>".$row['email']."</p>";
        //                 echo "<p>".$row['status']."</p>";
        //                 echo "<p>".$row['position']."</p>";
        //                 echo "<p>".$row['company']."</p>";
        //                 //header("location: ../index.php");
                   
        //         }
        //     }else{
        //         echo "0 results";
        //     }
    ?>
</body>
</html>