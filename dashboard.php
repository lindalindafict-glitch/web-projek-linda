
<?php
require_once "auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Hub - Web Programming 1</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff5f8;
            color: #49303b;
        }

        .header {
            background: linear-gradient(135deg, #d95783, #ef91ae);
            color: white;
            padding: 30px 8%;
        }

        .header h1 {
            margin: 0 0 10px;
            font-size: 30px;
        }

        .header p {
            margin: 0;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 24px;
        }

        .intro {
            margin-bottom: 28px;
        }

        .intro h2 {
            margin-bottom: 8px;
            color: #b93f6b;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 22px;
        }

        .menu-card {
            background: white;
            padding: 26px;
            border: 1px solid #f5d0dc;
            border-radius: 18px;
            box-shadow: 0 5px 18px rgba(180, 70, 110, 0.08);
        }

        .menu-card h3 {
            margin-top: 0;
            color: #bd456e;
        }

        .menu-card p {
            line-height: 1.6;
            color: #715563;
        }

        .menu-link {
            display: inline-block;
            margin-top: 10px;
            padding: 11px 18px;
            border-radius: 10px;
            background: #d95783;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .menu-link:hover {
            background: #b93f6b;
        }

        .logout {
            display: inline-block;
            margin-top: 28px;
            color: #b93f6b;
            font-weight: bold;
            text-decoration: none;
        }

        footer {
            text-align: center;
            padding: 24px;
            color: #8d6b7a;
        }

        @media (max-width: 650px) {
            .menu-grid {
                grid-template-columns: 1fr;
            }

            .header {
                padding: 25px 24px;
            }
        }
    </style>
</head>

<body>

    <header class="header">
        <h1>Project Hub</h1>
        <p>
            Selamat datang,
            <strong><?= htmlspecialchars($_SESSION["nama_lengkap"]) ?></strong>!
        </p>
    </header>

    <main class="container">
        <section class="intro">
            <h2>Menu Project</h2>
            <p>Pilih halaman yang ingin kamu buka.</p>
        </section>

        <section class="menu-grid">

            <article class="menu-card">
                <h3>Home / Biodata</h3>
                <p>Halaman profil dan biodata mahasiswa.</p>
                <a class="menu-link" href="index.php">Buka Halaman</a>
            </article>

            <article class="menu-card">
                <h3>Layout Lab</h3>
                <p>Belajar membagi halaman menggunakan CSS Grid.</p>
                <a class="menu-link" href="layout.php">Buka Halaman</a>
            </article>

            <article class="menu-card">
                <h3>Data Mahasiswa</h3>
                <p>Melihat data mahasiswa yang tersimpan di database.</p>
                <a class="menu-link" href="data_mahasiswa.php">Buka Halaman</a>
            </article>

            <article class="menu-card">
                <h3>Tambah Mahasiswa</h3>
                <p>Menambahkan data mahasiswa melalui formulir.</p>
                <a class="menu-link" href="form_mahasiswa.php">Buka Halaman</a>
            </article>

        </section>

        <a class="logout" href="logout.php">Logout</a>
    </main>

    <footer>
        Web Programming 1 &copy; 2026
    </footer>

</body>
</html>
