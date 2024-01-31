<?php
require('connection/conn.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['Submit'])) {
    $username = mysqli_real_escape_string($db, $_POST['korisnickoIme']);
    $email = mysqli_real_escape_string($db, $_POST['mejl']);
    $password = mysqli_real_escape_string($db, $_POST['sifra']);
    $cPassword = mysqli_real_escape_string($db, $_POST['cSifra']);

    if ($password == $cPassword) {
        $sql = "SELECT * FROM users WHERE username ='$username' OR email='$email'";
        $query = mysqli_query($db, $sql);

        if (mysqli_num_rows($query) == 0) {
            $sql = "INSERT INTO users (username, email, password, admin)
                    VALUES ('$username', '$email', '$password', 0)";
            $query = mysqli_query($db, $sql);

            if ($query) {
                $_SESSION['korisnik_sesija'] = $username;
                echo '<script>window.location="indexcUser.php";</script>';
                exit(); 
            } else {
                echo "<script>alert('Try again!')</script>";
            }
        } else {
            echo "<script>alert('Username/Email already exists in the database')</script>";
            echo '<script>window.location="register.php";</script>';
        }
    } else {
        echo "<script>alert('Passwords do not match or were not entered')</script>";
    }
}
?>




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register Form</title>
</head>
<body id="registerBody">
<?php include 'includes/register-header.php'; ?>

    <div class="wrapper">
      <h2>Register</h2>
      <form method="POST" action="register.php">

        <div class="input-box">
          <input type="text" placeholder="Enter your username" name = 'korisnickoIme' required>
    </div>
    <div class="input-box">
          <input type="text" placeholder="Enter your email" name = 'mejl' required>
    </div>
    <div class="input-box">
          <input type="password" placeholder="Create password" name = 'sifra' required>
    </div>
    <div class="input-box">
          <input type="password" placeholder="Confirm password" name = 'cSifra' required>
    </div>
  
    <div class="input-box">
    <input type="Submit" value="Register" name="Submit">
    </div>

    <div class="text">
      <h3>Already have an account? <a href="login.php">Login</a></h3>
    </div>
    <?php include 'includes/footer.php'; ?>

</body>
</html>