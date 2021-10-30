<?php
    $host     = "localhost";
    $username = "rajendra";
    $password = "";
    $database = "uts";
    $koneksi  = mysqli_connect($host, $username, $password, $database);

    if (! $koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
