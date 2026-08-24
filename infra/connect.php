<?php

    $host = "localhost";
    $user = "root";
    $password = "root";
    $database = "crud_cliente";
    $conn = mysqli_connect($host, $user, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>