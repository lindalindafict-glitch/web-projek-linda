
<?php
require_once "auth.php";
require_once "koneksi.php";

$conn->set_charset("utf8mb4");

$sql = "SELECT id, nim, nama, program_studi, email, nomor_telepon
        FROM mahasiswa
        ORDER BY id ASC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="tugas.css">
</head>

<body>

<header>
    <h1>Data Mahasiswa</h1>
    <p>Web Programming 1</p>
</header>

<nav>
    <a href="dashboard.php">Dashboard</a>
    <a href="tugas.html">Biodata</a>
    <a href="data_mahasiswa.php">Data Mahasiswa</a>
    <a href="form_mahasiswa.php">Tambah Mahasiswa</a>
    <a href="logout.php">Logout</a>
</nav>

<main>
    <section>
        <h2>Daftar Mahasiswa</h2>

        <?php if (isset($_GET["status"]) && $_GET["status"] === "sukses"): ?>
            <p class="success-message">Data berhasil ditambahkan.</p>
        <?php endif; ?>

        <table class="data-table">
            <caption>Data Mahasiswa dari MySQL</caption>

            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor Telepon</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;

                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo htmlspecialchars($row["nim"]); ?></td>
                        <td><?php echo htmlspecialchars($row["nama"]); ?></td>
                        <td><?php echo htmlspecialchars($row["program_studi"]); ?></td>
                        <td><?php echo htmlspecialchars($row["email"]); ?></td>
                        <td><?php echo htmlspecialchars($row["nomor_telepon"]); ?></td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>

    </section>
</main>

<footer>
    <p>Web Programming 1</p>
</footer>

</body>
</html>

<?php
$conn->close();
?>