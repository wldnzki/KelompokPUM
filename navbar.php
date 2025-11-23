<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: user/index.php");
    exit();
}

$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMJ TI</title>
    <link rel="icon" href="images/logo hmjti.png">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        /* === Navbar Custom === */
        .navbar {
            background: linear-gradient(90deg, #1E3A8A, #2563EB);
            /* biru tua -> biru terang */
            box-shadow: 0 3px 10px rgba(0, 0, 0, .15);
        }

        .navbar .navbar-brand {
            font-weight: 700;
            letter-spacing: 1px;
            color: #fff;
        }

        .navbar .navbar-brand span {
            font-size: 1.2rem;
        }

        .navbar .nav-link {
            color: #e5e7eb !important;
            margin: 0 4px;
            border-radius: 6px;
            padding: 6px 14px;
            transition: all 0.3s;
        }

        .navbar .nav-link:hover {
            background: rgba(255, 255, 255, 0.15);
            color: #fff !important;
        }

        .navbar .nav-link.active {
            background: #3B82F6;
            color: #fff !important;
        }

        .btn-login {
            background: #3B82F6;
            color: #fff !important;
            border-radius: 6px;
            padding: 6px 16px;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #2563EB;
        }
    </style>
</head>

<body>
    <!-- ===== NAVBAR START ===== -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="images/logo hmjti.png" alt="HMJ TI" height="40" class="me-2">
                <span>HMJ Teknologi Informasi</span>
            </a>

            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>"
                            href="index.php">Beranda
                    <li class="nav-item"><a class="nav-link <?= ($current_page == 'divisi.php') ? 'active' : '' ?>"
                            href="divisi.php">Divisi</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($current_page == 'pengurus.php') ? 'active' : '' ?>"
                            href="pengurus.php">Pengurus</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($current_page == 'activity.php') ? 'active' : '' ?>"
                            href="kegiatan.php">Kegiatan</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($current_page == 'blog.php') ? 'active' : '' ?>"
                            href="Berita.php">Berita</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($current_page == 'about.php') ? 'active' : '' ?>"
                            href="sosial media.php">Sosial Media</a></li>
                    <li class="nav-item"><a
                            class="nav-link btn-login <?= ($current_page == 'login.php') ? 'active' : '' ?>"
                            href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ===== NAVBAR END ===== -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
