<?php
require('connection/conn.php');

session_start();

if (isset($_POST['email'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password ='$password'";
    $rezultat = mysqli_query($db, $sql);

    if (mysqli_num_rows($rezultat) == 1) {
        $row = mysqli_fetch_assoc($rezultat);
        $_SESSION['korisnik_sesija'] = $row['username'];
        echo '<script>window.location="indexcUser.php";</script>';
        return true;
    } else {
        echo "<script>alert('Incorrect email or password.')</script>";
        echo '<script>window.location="login.php";</script>';
        return true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Form</title>
</head>
<body id="loginBody">
<?php include 'includes/login-header.php'; ?>

    <div class="login">
    <form action="" method="POST">
      <h2>Login</h2>
      <div class="input-box">
          <input type="text" placeholder="Enter your email" name='email' required>
    </div>
   <div class="input-box">
          <input type="password" placeholder="Enter your password" name='password' required>
    </div>
  
    <div class="input-box">
          <input type="Submit" value="Login">
    </div>
    <div class="text">
      <h3>Don't have an account? <a href="register.php">Sign up</a></h3>
    </div>
</body>
</html>
