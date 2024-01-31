<?php
require('connection/conn.php');
session_start();

$response = array();

if (isset($_SESSION['korisnik_sesija'])) {
    $response['loggedIn'] = true;
    $response['username'] = $_SESSION['korisnik_sesija'];
} else {
    $response['loggedIn'] = false;
    $response['message'] = 'User not logged in';
}

header('Content-Type: application/json');
echo json_encode($response);

