<?php
    $koneksi = mysqli_connect("localhost", "root", "", "pemrograman");

    if (mysqli_connect_error()) {
        echo "koneksi database". mysqli_connect_error();
        
    }
?>