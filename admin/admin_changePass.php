<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require('../connection/conn.php');

if (!isset($_SESSION['korisnik_sesija'])) {
    echo '<script>window.location="login.php";</script>';
    exit();
}

if (isset($_POST['submit'])) {
    $sifra = mysqli_real_escape_string($db, $_POST['sifra']);
    $novasifra = mysqli_real_escape_string($db, $_POST['novasifra']);
    $korisnik1 = $_SESSION['korisnik_sesija'];

    $upit = "SELECT * FROM users WHERE password='$sifra' AND username='$korisnik1'";
    $provjera = mysqli_query($db, $upit);

    if (!$provjera) {
        echo "Greška prilikom izvršavanja upita: " . mysqli_error($db);
    } elseif (mysqli_num_rows($provjera) == 0) {
        echo "<script>location.reload();</script>";
        return true;
    } else {
        $sql = "UPDATE users SET password='$novasifra' WHERE password='$sifra' AND username='$korisnik1'";
        $rezultat = mysqli_query($db, $sql);

        if (!$rezultat) {
            echo "Greška prilikom izvršavanja upita: " . mysqli_error($db);
        } else {
            echo "<script>alert('You have successfully changed your password!')</script>";
            echo '<script>window.location="login.php";</script>';
            return true;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/FootballShop/css/style.css">
    <title>Login Form</title>
</head>

<body id="loginBody">
    <?php include 'changePassAdmin-header.php'; ?>

    <div class="login">
        <form action="" method="POST">
            <h2>Change password</h2>
            <div class="input-box">
                <input type="password" placeholder="Enter your current password" name='sifra' required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Enter your new password" name='novasifra' required>
            </div>

            <div class="input-box" button>
                <button name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
