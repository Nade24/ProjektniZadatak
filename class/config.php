<!--
Author: Nadir Mesetovic
File: config.php
 -->

<?php
// Zadatak je radjen iskljucivo sa LOCALHOST postavkama te s toga, uzeti su podaci
// koji odgovaraju XAMPP konfiguraciji username default root, lozinke nema
$servername = "localhost";
$username = "root";
$password = "";
$db = "calculator";

// mysqli konekcija sa bazom podataka
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
?>
