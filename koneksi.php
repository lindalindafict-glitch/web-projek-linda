<?php

$conn = new mysqli("localhost", "root", "", "web_programming_1");

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>