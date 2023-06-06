<?php
$servername = "db";
$username = "ctf_user";
$password = "ctf_password";
$dbname = "ctf_challenge";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
