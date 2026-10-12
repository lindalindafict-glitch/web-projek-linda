
<?php
require_once "auth.php";
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="tugas.css">
</head>

<body>

    <header>
        <h1>Tambah Data Mahasiswa</h1>
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
        <section class="card">
            <h2>Form Data Mahasiswa</h2>

            <form class="student-form" action="proses_tambah.php" method="POST">

                <p>
                    <label for="nim">NIM</label><br>
                    <input type="text" id="nim" name="nim" required>
                </p>

                <p>
                    <label for="nama">Nama</label><br>
                    <input type="text" id="nama" name="nama" required>
                </p>

                <p>
                    <label for="program_studi">Program Studi</label><br>
                    <select id="program_studi" name="program_studi" required>
                        <option value="">-- Pilih Program Studi --</option>
                        <option value="Informatika">Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                    </select>
                </p>

                <p>
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" required>
                </p>

                <p>
                    <label for="nomor_telepon">Nomor Telepon</label><br>
                    <input type="text" id="nomor_telepon" name="nomor_telepon" required>
                </p>

                <button type="submit">Simpan Data</button>

            </form>
        </section>
    </main>

    <footer>
        <p>Web Programming 1</p>
    </footer>

</body>
</html>