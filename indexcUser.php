<?php
session_start();
require('connection/conn.php');
require('includes/header.php');

if(isset($_SESSION["korisnik_sesija"])) {
    $username = $_SESSION["korisnik_sesija"];

    $sqle = "SELECT * FROM users WHERE username='$username'";
    $query2 = mysqli_query($db, $sqle);

    if($query2) {
        $row = mysqli_fetch_assoc($query2); 
        $admin = $row['admin'];

        if($admin == 0) {
            echo '<script>window.location="user/user.php";</script>';
            exit();
        } else {
            echo '<script>window.location="admin/admin.php";</script>';
            exit();
        }
    } else {
        echo "<script>alert('Error executing the query.');</script>";
    }
} else {
    echo "<script>alert('Session not set up.');</script>";
}
?>
