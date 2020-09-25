<?php
session_start();
$email =  $_SESSION['email'];
if(empty($email)){
    header("location:login.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamza's admin</title>
</head>
<body>
<div>
    <a href="logout.php">logout</a>
</div>

<?php
    $con = mysqli_connect("localhost","root","","myportfolio");
             if (mysqli_connect_errno()){
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $sql = "SELECT * FROM `visitors`";
               $result = mysqli_query($con,$sql);



while($row = mysqli_fetch_assoc($result)):
  echo '<ul> <li>' .$row['visitor_name']. '</li></ul>';
 endwhile;
?>

</body>
</html>
