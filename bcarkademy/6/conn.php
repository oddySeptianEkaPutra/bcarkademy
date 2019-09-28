<?php

    global $conn;

    $conn = mysqli_connect("localhost", "root", "", "bcarka") or die("Koneksi gagal");
    mysqli_select_db($conn, "bcarka") or die("Database belum ada, silahkan import database");

?>