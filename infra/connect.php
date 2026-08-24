<?php
$host = "localhost";
$user = "root";
$senha = "root";
$dbname = "petshop_db";

$conn = mysqli_connect($host, $user, $senha, $dbname);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8mb4");
?>