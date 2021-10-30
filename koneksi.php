<?php
    $host     = "10.0.0.20";
    $username = "rajendra";
    $password = "Jakarta12.";
    $database = "uts";
    $koneksi  = mysqli_connect($host, $username, $password, $database);

    if (! $koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
