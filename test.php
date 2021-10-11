<?php
    $host= "localhost";
    $database = "fyp";
    $user= "root";
    $pass = "";

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
</head>
<body>
<table>
        <tr>
            <th>id</th>
            <th>first name</th>
            <th>last name</th>
            <th>email</th>
            <th>status</th>
            <th>position</th>
            <th>company</th>
            <th>full name</th>
        </tr>

        <?php
            $sql = "SELECT user_id, first_name, last_name, email, status, position, company, CONCAT(first_name, ' ', last_name) AS whole_name FROM user WHERE user_id = 3001";
            $result = $connect->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "";
                    echo "<tr>";
                    echo "<td>" . $row['user_id'] ."</td>";
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "<td>" . $row['position'] . "</td>";
                    echo "<td>" . $row['company'] . "</td>";
                    echo "<td>" . $row['whole_name'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
        ?>

    </table>

    <?php
            $sql = "SELECT user.user_id, user.first_name, user.last_name, user.email, user.status, user.position, user.company, profile.about, profile.profile, CONCAT(user.first_name, ' ', user.last_name) AS whole_name FROM user
            INNER JOIN profile on user.user_id = profile.user_id
            WHERE user.user_id = 3001";
            $result = $connect->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<p>".$row['whole_name']."</p>";
                    echo "<p>".$row['user_id']."</p>";
                    echo "<p>".$row['first_name']."</p>";
                    echo "<p>".$row['last_name']."</p>";
                    echo "<p>".$row['email']."</p>";
                    echo "<p>".$row['status']."</p>";
                    echo "<p>".$row['position']."</p>";
                    echo "<p>".$row['company']."</p>";
                    echo "<p>".$row['about']."</p>";
                    echo "<img src=".$row['profile']." alt=\"\"";
                }
            } else {
                echo "0 results";
            }
        ?>
<img src="" alt="">
</body>
</html>