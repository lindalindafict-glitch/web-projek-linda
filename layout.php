
<?php
require_once "auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Lab - Web Programming 1</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff0f5;
            color: #4a3040;
        }

        .layout-container {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 220px 1fr;
            grid-template-rows: 90px 1fr 65px;
            grid-template-areas:
                "header header"
                "sidebar content"
                "footer footer";
        }

        .header {
            grid-area: header;
            background: linear-gradient(135deg, #d95783, #ef91ae);
            color: white;
            padding: 20px 30px;
            display: flex;
            align-items: center;
        }

        .header h2 {
            margin: 0;
        }

        .sidebar {
            grid-area: sidebar;
            background: #f9c6d5;
            padding: 25px 20px;
        }

        .sidebar h3 {
            margin-top: 0;
            color: #873750;
        }

        .sidebar a {
            display: block;
            margin: 15px 0;
            padding: 11px 12px;
            border-radius: 8px;
            color: #70334b;
            text-decoration: none;
            font-weight: bold;
            transition: 0.2s;
        }

        .sidebar a:hover {
            background: white;
            color: #c12f64;
            transform: translateX(3px);
        }

        .content {
            grid-area: content;
            padding: 30px;
            min-width: 0;
        }

        .content-card {
            background: white;
            padding: 30px;
            border: 1px solid #f5cad8;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(180, 70, 110, 0.12);
        }

        .content-card h2 {
            color: #bd456e;
            margin-top: 0;
        }

        .content-card h3 {
            color: #873750;
        }

        .content-card p,
        .content-card li {
            line-height: 1.8;
        }

        .section-list {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
            padding: 0;
            list-style: none;
        }

        .section-list li {
            padding: 16px;
            background: #fff0f5;
            border-left: 4px solid #d95783;
            border-radius: 8px;
        }

        .footer {
            grid-area: footer;
            background: #d95783;
            color: white;
            text-align: center;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 600px) {
            .layout-container {
                grid-template-columns: 1fr;
                grid-template-rows: auto auto 1fr auto;
                grid-template-areas:
                    "header"
                    "sidebar"
                    "content"
                    "footer";
            }

            .header {
                padding: 20px;
            }

            .sidebar {
                padding: 15px 20px;
            }

            .content {
                padding: 18px;
            }

            .content-card {
                padding: 20px;
            }

            .section-list {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="layout-container">

        <header class="header">
            <h2>Layout Lab</h2>
        </header>

        <aside class="sidebar">
            <h3>Menu Navigasi</h3>
            <a href="dashboard.php">Dashboard</a>
            <a href="index.php">Home / Biodata</a>
            <a href="data_mahasiswa.php">Data Mahasiswa</a>
            <a href="form_mahasiswa.php">Tambah Mahasiswa</a>
            <a href="logout.php">Logout</a>
        </aside>

        <main class="content">
            <section class="content-card">
                <h2>Belajar CSS Grid</h2>

                <p>
                    Halaman ini menggunakan CSS Grid untuk membagi
                    tampilan web menjadi beberapa section.
                </p>

                <h3>Bagian Layout</h3>

                <ul class="section-list">
                    <li>
                        <strong>Header</strong><br>
                        Bagian atas halaman yang menampilkan judul.
                    </li>
                    <li>
                        <strong>Sidebar</strong><br>
                        Area menu untuk berpindah halaman.
                    </li>
                    <li>
                        <strong>Content</strong><br>
                        Bagian utama untuk menampilkan informasi.
                    </li>
                    <li>
                        <strong>Footer</strong><br>
                        Bagian bawah halaman.
                    </li>
                </ul>

                <p>
                    Selamat datang,
                    <strong><?= htmlspecialchars($_SESSION["nama_lengkap"]) ?></strong>!
                </p>
            </section>
        </main>

        <footer class="footer">
            Web Programming 1 &copy; 2026
        </footer>

    </div>
</body>
</html>
