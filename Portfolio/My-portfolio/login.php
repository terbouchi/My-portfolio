<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login portfolio</title>

    <?php

session_start();
    
        $con = mysqli_connect("localhost","root","","myportfolio");
        if (mysqli_connect_errno()){
           echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
        if(isset($_POST['login'])){
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $passwd = mysqli_real_escape_string($con,$_POST['password']);

            if ($email!="" && $passwd!="") {
                $sql = "SELECT id FROM login WHERE email='$email' and passwd='$passwd'";
                $result = mysqli_query($con,$sql);
                
                $count = mysqli_num_rows($result);
                if ($count==1) {
                    $_SESSION['email'] = $email;

                    header("location:hmz.php");
                }

            }
        }
    ?>
</head>
<body class="login-page">
<center>
<img src="images/logo.png" alt="" style="max-width: 60%;margin-top: 3rem;margin-bottom: 2rem;">


<div class="login-page">
  <div class="form">   
    <form class="login-form" action="login.php" method="post">
      <input type="text" name="email" placeholder="Email" value="">
      <input type="password" name="password" placeholder="Password" value="">
      <button type="submit" class="btn" name="login" >login</button>
      
    </form>
  </div>
</div>
</center>
</body>
</html>