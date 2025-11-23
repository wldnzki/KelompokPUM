<?php
require 'include/config.php';

$query = "SELECT * FROM pengurus";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Query error: " . mysqli_error($conn));
}
?>

<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengurus HMJ TI</title>
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
            animation: fadeInDown 1.2s ease-in-out;
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
            font-size: 1.3rem;
            margin-top: 10px;
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

        /* ===== GRID PENGURUS ===== */
        .divisi {
            min-height: 100vh;
            padding: 60px 20px;
            text-align: center;
            background: #f9f9f9;
        }

        .divisi h2 {
            margin-bottom: 40px;
            font-size: 2.2rem;
            color: #0c3c78;
        }

        .pro-cont {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* ===== KARTU PENGURUS ===== */
        .dev {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            opacity: 0;
            transition: transform 0.8s ease, opacity 0.8s ease;
        }

        /* posisi sebelum muncul */
        .fade-left {
            transform: translateX(-80px);
        }

        .fade-right {
            transform: translateX(80px);
        }

        /* muncul */
        .dev.show {
            transform: translateX(0);
            opacity: 1;
        }

        .card-img-top {
            width: 100%;
            aspect-ratio: 4/3;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .dev:hover .card-img-top {
            transform: scale(1.05);
        }

        .des {
            padding: 18px;
            text-align: center;
        }

        .des span {
            display: block;
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 6px;
            color: #0c3c78;
        }

        .des h5 {
            font-size: 1rem;
            color: #444;
            margin: 0;
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
        <h1>Pengurus HMJ Teknik Informatika</h1>
        <p>Badan Pengurus Harian Himpunan Mahasiswa Jurusan TI</p>
        <a href="#pengurus" class="scroll-down">
            <i class="fas fa-chevron-down"></i>
        </a>
    </div>

    <!-- PENGURUS SECTION -->
    <div class="divisi" id="pengurus">
        <h2>Struktur Kepengurusan</h2>
        <div class="pro-cont">
            <?php
            $index = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $nama = htmlspecialchars($row['nama']);
                $angkatan = htmlspecialchars($row['angkatan']);
                $gambar = 'admin/' . $row['foto'];
                $direction = ($index % 2 == 0) ? 'fade-left' : 'fade-right';

                echo '
          <div class="dev ' . $direction . '">
              <img src="' . $gambar . '" class="card-img-top" alt="Foto ' . $nama . '">
              <div class="des">
                  <span>' . $nama . '</span>
                  <h5>Angkatan ' . $angkatan . '</h5>
              </div>
          </div>';
                $index++;
            }
            ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>

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