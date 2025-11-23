<?php
include 'navbar.php';
require 'include/config.php';

// Ambil data gallery dari database
$query = "SELECT * FROM gallery";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Query error: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan PALADA</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background: #f4f4f4;
            scroll-behavior: smooth;
        }

        /* ===== HERO SECTION ===== */
        .hero {
            height: 90vh;
            background: linear-gradient(135deg, #0c3c78, #1e90ff);
            color: #fff;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
        }

        .hero h1 {
            font-size: 3rem;
            margin: 0;
            animation: fadeInDown 1.2s ease-in-out;
        }

        .hero p {
            font-size: 1.2rem;
            margin-top: 12px;
            animation: fadeInDown 1.5s ease-in-out;
        }

        .scroll-down {
            position: absolute;
            bottom: 30px;
            font-size: 2rem;
            color: #fff;
            animation: bounce 2s infinite;
            cursor: pointer;
        }

        /* ===== GRID ACTIVITIES ===== */
        .divisi {
            min-height: 100vh;
            padding: 60px 20px;
            background: #f9f9f9;
            text-align: center;
        }

        .divisi h2 {
            margin-bottom: 40px;
            font-size: 2.2rem;
            color: #0c3c78;
        }

        .pro-cont {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* ===== KARTU KEGIATAN ===== */
        .dev {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            opacity: 0;
            transition: transform 0.8s ease, opacity 0.8s ease;
        }

        .fade-left {
            transform: translateX(-80px);
        }

        .fade-right {
            transform: translateX(80px);
        }

        .dev.show {
            transform: translateX(0);
            opacity: 1;
        }

        .dev img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .dev:hover img {
            transform: scale(1.05);
        }

        .des {
            padding: 16px;
        }

        .des span {
            display: block;
            font-weight: 600;
            font-size: 1rem;
            color: #333;
        }

        /* ANIMASI */
        @keyframes fadeInDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-12px);
            }

            60% {
                transform: translateY(-6px);
            }
        }
    </style>
</head>

<body>

    <!-- HERO SECTION -->
    <div class="hero">
        <h1>Kegiatan HMJ Teknologi Informasi</h1>
        <p>Dokumentasi dan Galeri Aktivitas Teknologi Informasi</p>
        <a href="#kegiatan" class="scroll-down">
            <i class="fas fa-chevron-down"></i>
        </a>
    </div>

    <!-- ACTIVITIES SECTION -->
    <div class="divisi" id="kegiatan">
        <h2>Galeri Kegiatan</h2>
        <div class="pro-cont">
            <?php
            $index = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $foto = 'admin/img/activity/' . $row['foto'];
                $deskripsi = htmlspecialchars($row['deskripsi']);
                $direction = ($index % 2 == 0) ? 'fade-left' : 'fade-right';

                echo '
                <div class="dev ' . $direction . '" onclick="window.location.href=\'activity.php?id=' . $row['id'] . '\'">
                    <img src="' . $foto . '" alt="Kegiatan">
                    <div class="des">
                        <span>' . $deskripsi . '</span>
                    </div>
                </div>';
                $index++;
            }
            ?>
        </div>
    </div>

    <?php include('footer.php'); ?>

    <script>
        // Animasi fade kiri/kanan saat scroll
        const cards = document.querySelectorAll('.dev');

        function showOnScroll() {
            const triggerBottom = window.innerHeight * 0.85;
            cards.forEach((card, index) => {
                const boxTop = card.getBoundingClientRect().top;
                if (boxTop < triggerBottom) {
                    setTimeout(() => {
                        card.classList.add('show');
                    }, index * 150);
                }
            });
        }

        window.addEventListener('scroll', showOnScroll);
        window.addEventListener('load', showOnScroll);
    </script>

</body>

</html>