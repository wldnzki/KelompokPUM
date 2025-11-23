<?php include 'navbar.php'; ?>
<?php
include 'include/config.php';

$query = "SELECT * FROM devisi";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}

$divisi = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisi HMJ Teknik Informatika</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        /* ===== RESET & GLOBAL ===== */
        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            /* cegah scroll horizontal */
            font-family: "Poppins", sans-serif;
            background: #f4f4f4;
            scroll-behavior: smooth;
        }

        /* ===== BANNER ===== */
        .baner {
            height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 50px 20px;
            background: linear-gradient(135deg, #0c3c78, #1e90ff);
            color: #fff;
            animation: fadeInDown 1.2s ease-in-out;
            position: relative;
        }

        .baner h1 {
            font-size: 3.8rem;
            margin: 0;
            font-weight: 700;
        }

        .baner h2 {
            margin: 15px 0;
            font-size: 1.8rem;
        }

        .baner h3 {
            font-weight: normal;
            font-size: 1.2rem;
        }

        /* Panah scroll */
        .scroll-down {
            position: absolute;
            bottom: 20px;
            font-size: 2rem;
            color: #fff;
            animation: bounce 1.5s infinite;
            cursor: pointer;
        }

        /* ===== DIVISI SECTION ===== */
        .divisi {
            min-height: 90vh;
            padding: 60px 20px;
            text-align: center;
            background: #f9f9f9;
        }

        .divisi h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #0c3c78;
        }

        .divisi h3 {
            font-size: 1.2rem;
            color: #555;
            max-width: 700px;
            margin: 0 auto 40px auto;
            line-height: 1.6;
        }

        .pro-cont {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            padding: 10px;
            box-sizing: border-box;
        }

        .dev {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            opacity: 0;
            transition: transform 0.8s ease, opacity 0.8s ease;
        }

        /* posisi awal sebelum muncul */
        .fade-left {
            transform: translateX(-5vw);
        }

        .fade-right {
            transform: translateX(5vw);
        }

        /* muncul */
        .dev.show {
            transform: translateX(0);
            opacity: 1;
        }

        .dev img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .dev:hover img {
            transform: scale(1.05);
        }

        .des {
            padding: 15px;
        }

        .des span {
            display: block;
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #0c3c78;
        }

        .des h5 {
            font-weight: normal;
            color: #444;
            font-size: 1rem;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .baner h1 {
                font-size: 2.5rem;
            }

            .baner h2 {
                font-size: 1.3rem;
            }

            .baner h3 {
                font-size: 1rem;
            }
        }

        /* ANIMATIONS */
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
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>

<body>

    <!-- ===== Banner Fullscreen ===== -->
    <div class="baner">
        <h1>Selamat Datang di Website</h1>
        <h3>Himpunan Mahasiswa Jurusan</h3>
        <h4>Teknologi Informasi</h4>
        <a href="#dev-p1" class="scroll-down"><i class="fa-solid fa-angle-down"></i></a>
    </div>

    <!-- ===== Section Divisi ===== -->
    <div class="divisi" id="dev-p1">
        <h2>Divisi HMJ TI</h2>
        <h3>
            HMJ TI memiliki berbagai divisi yang menjadi motor penggerak kegiatan organisasi.
            Setiap divisi berperan penting dalam pengembangan minat, bakat, dan kompetensi mahasiswa,
            mulai dari riset teknologi, kreativitas, hingga pengabdian masyarakat.
            Kenali masing-masing divisi dan temukan tempat terbaik untuk berkarya bersama kami.
        </h3>

        <div class="pro-cont">
            <?php foreach ($divisi as $index => $row):
                $direction = ($index % 2 == 0) ? 'fade-left' : 'fade-right';
                ?>
                <div class="dev <?php echo $direction; ?>">
                    <img src="admin/img/devisi/<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama_devisi']; ?>">
                    <div class="des">
                        <span><?php echo $row['nama_devisi']; ?></span>
                        <h5><?php echo $row['deskripsi']; ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        // Animasi muncul fade kiri/kanan
        const elements = document.querySelectorAll('.dev');

        function showOnScroll() {
            const triggerBottom = window.innerHeight * 0.85;
            elements.forEach((el, index) => {
                const boxTop = el.getBoundingClientRect().top;
                if (boxTop < triggerBottom) {
                    setTimeout(() => {
                        el.classList.add('show');
                    }, index * 150); // delay bergantian
                }
            });
        }
        window.addEventListener('scroll', showOnScroll);
        window.addEventListener('load', showOnScroll);
    </script>
</body>

</html>