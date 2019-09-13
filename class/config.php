<!--
Author: Nadir Mesetovic
File: config.php
 -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "calculator";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
?>
