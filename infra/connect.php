<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "petshop_db";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8mb4");
?>