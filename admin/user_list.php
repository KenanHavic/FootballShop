<?php
require('../connection/conn.php');
require('admin-header.php');

error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();

$query = "SELECT * FROM users";
$result = mysqli_query($db, $query);

echo '<html>';
echo '<head>';
echo '<title>Lista korisnika</title>';
echo '<style>';
echo 'body { font-family: Arial, sans-serif; background: url("../image/1.png") no-repeat center center fixed; background-size: cover; color: #333; }';
echo 'h2 { color: white; }';
echo 'table { width: 100%; border-collapse: collapse; margin-top: 20px; }';
echo 'th, td { padding: 10px; border: 1px solid #ddd; text-align: left; background-color: #f9f9f9; }'; 
echo 'th { background-color: #f2f2f2; }';
echo 'tr:hover { background-color: #ddd; }'; 
echo '</style>';

echo '</head>';
echo '<body>';

if ($result) {
    echo "<h2>List of users:</h2>";
    echo "<table>";
    echo "<tr><th>Username</th><th>Email</th><th>Password</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";

        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Error executing the query: " . mysqli_error($db);
}

echo '</body>';
echo '</html>';

?>
