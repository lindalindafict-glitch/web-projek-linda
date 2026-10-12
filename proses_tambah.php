
<?php

require_once "auth.php";
require_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nim = trim($_POST["nim"] ?? "");
    $nama = trim($_POST["nama"] ?? "");
    $program_studi = trim($_POST["program_studi"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $nomor_telepon = trim($_POST["nomor_telepon"] ?? "");

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Format email tidak valid.");
    }

    $stmt = $conn->prepare(
        "INSERT INTO mahasiswa (nim, nama, program_studi, email, nomor_telepon)
         VALUES (?, ?, ?, ?, ?)"
    );

    $stmt->bind_param(
        "sssss",
        $nim,
        $nama,
        $program_studi,
        $email,
        $nomor_telepon
    );

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();

        header("Location: data_mahasiswa.php?status=sukses");
        exit;
    } else {
        echo "Data gagal disimpan.";

        $stmt->close();
    }
}

$conn->close();

?>