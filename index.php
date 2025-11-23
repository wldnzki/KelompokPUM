<?php
include 'auth.php';
include 'navbar.php';
include '../include/config.php';

// Ambil data kegiatan
$qBlog = mysqli_query($conn, "SELECT * FROM blog ORDER BY id DESC LIMIT 3");
$blog = mysqli_fetch_all($qBlog, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMJ TI - Beranda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary: #2563eb;
            --secondary: #1e40af;
            --dark: #1e293b;
            --light: #f9fafb;
            --radius: 20px;
            --shadow: 0 8px 24px rgba(0, 0, 0, .1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(120deg, #eef3ff, #e7f0ff);
            color: var(--dark);
            line-height: 1.6;
        }

        html {
            scroll-behavior: smooth;
        }

        /* HERO */
        .hero {
            min-height: 90vh;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            animation: fadeDown 1.2s ease forwards;
        }

        .hero h2 {
            font-size: 1.4rem;
            margin-top: 10px;
            animation: fadeUp 1.2s ease .3s forwards;
            opacity: 0;
        }

        .hero p {
            max-width: 650px;
            margin-top: 20px;
            opacity: 0;
            animation: fadeIn 1.5s ease .6s forwards;
        }

        .btn-primary {
            margin-top: 25px;
            padding: 12px 28px;
            background: #fff;
            color: var(--primary);
            border-radius: var(--radius);
            font-weight: 600;
            text-decoration: none;
            transition: .3s;
            opacity: 0;
            animation: fadeIn 1.8s ease .9s forwards;
        }

        .btn-primary:hover {
            background: var(--dark);
            color: #fff;
            transform: translateY(-3px);
        }

        /* SECTION GENERIC */
        section {
            padding: 70px 20px;
            text-align: center;
        }

        section h2 {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 25px;
        }

        section p {
            font-size: 1.05rem;
        }

        /* Scroll reveal base */
        .reveal {
            opacity: 0;
            transform: translateY(60px);
            transition: all .8s ease-out;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ABOUT */
        .about-box {
            max-width: 1000px;
            margin: 0 auto;
            background: #fff;
            border: 2px solid var(--primary);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 40px 30px;
        }

        .about-box p {
            max-width: 750px;
            margin: 0 auto 20px auto;
            text-align: justify;
        }

        /* VISI MISI */
        .visi-misi {
            max-width: 1000px;
            margin: 50px auto;
            background: #fff;
            border: 2px solid var(--primary);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 40px 30px;
        }

        .visi-misi .inner {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: center;
            text-align: left;
        }

        .visi-misi .block {
            flex: 1 1 320px;
            background: var(--light);
            border-radius: var(--radius);
            padding: 25px;
            box-shadow: var(--shadow);
            opacity: 0;
            transform: translateY(40px);
            transition: all .8s ease;
        }

        .visi-misi .block.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .visi-misi .block h3 {
            text-align: center;
            color: var(--primary);
            margin-bottom: 12px;
            font-size: 1.3rem;
        }

        .visi-misi ul {
            list-style: disc inside;
            padding-left: 15px;
        }

        .visi-misi li {
            margin: 8px 0;
            text-align: justify;
        }

        /* GRID CARD */
        .grid {
            margin-top: 30px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .card {
            background: #fff;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 20px;
            text-align: left;
            transition: .3s;
            opacity: 0;
            transform: translateY(40px);
        }

        .card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .card:hover {
            transform: translateY(-6px);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: var(--radius);
            margin-bottom: 12px;
        }

        .card h4 {
            color: var(--primary);
            margin-bottom: 8px;
        }

        /* CTA */
        .cta {
            background: var(--primary);
            color: #fff;
            text-align: center;
            padding: 60px 20px;
        }

        .cta h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        /* FOOTER */
        footer {
            background: var(--dark);
            color: #fff;
            text-align: center;
            padding: 18px 20px;
            font-size: .9rem;
        }

        /* Keyframes */
        @keyframes fadeDown {
            from {
                opacity: 0;
                transform: translateY(-40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @media(max-width:768px) {
            .hero h1 {
                font-size: 2.4rem;
            }

            .hero h2 {
                font-size: 1.1rem;
            }
        }
    </style>
</head>

<body>

    <!-- HERO -->
    <div class="hero">
        <h1>Himpunan Mahasiswa Jurusan</h1>
        <h2>Teknologi Informasi</h2>
        <p>Selamat datang di website resmi HMJ TI. Mari berkembang bersama melalui kolaborasi, inovasi, dan pengabdian
            di bidang teknologi informasi.</p>
        <a href="#about" class="btn-primary">Kenal Lebih Dekat</a>
    </div>

    <!-- ABOUT -->
    <section id="about" class="reveal">
        <div class="about-box">
            <h2>Tentang Kami</h2>
            <p>HMJ Teknik Informatika adalah organisasi kemahasiswaan yang menjadi wadah pengembangan potensi,
                kreativitas, dan kepemimpinan mahasiswa.</p>
            <p>Kami berkomitmen menciptakan generasi teknologi yang <strong>inovatif</strong>,
                <strong>kolaboratif</strong>, dan <strong>profesional</strong> dalam menghadapi tantangan era digital.
            </p>
        </div>
    </section>

    <!-- VISI & MISI -->
    <section id="visi-misi" class="reveal">
        <div class="visi-misi">
            <h2>Visi &amp; Misi HMJ TI</h2>
            <div class="inner">
                <div class="block">
                    <h3>Visi</h3>
                    <p>Menjadi himpunan mahasiswa yang inovatif, kolaboratif, dan berintegritas dalam pengembangan
                        teknologi informasi untuk kemajuan akademik dan masyarakat.</p>
                </div>
                <div class="block">
                    <h3>Misi</h3>
                    <ul>
                        <li>Meningkatkan kompetensi mahasiswa melalui kegiatan akademik, riset, dan pengembangan
                            teknologi.</li>
                        <li>Mendorong kolaborasi antardivisi untuk menciptakan inovasi bermanfaat bagi kampus dan
                            masyarakat.</li>
                        <li>Menanamkan nilai kepemimpinan, profesionalitas, dan integritas pada setiap anggota.</li>
                        <li>Memperluas jejaring dengan institusi dan komunitas teknologi lokal maupun nasional.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- BLOG -->
    <section id="blog">
        <h2>Kegiatan Terbaru</h2>
        <div class="grid">
            <?php foreach ($blog as $b): ?>
                <div class="card reveal">
                    <img src="../admin/img/blog/<?= htmlspecialchars($b['gambar']); ?>"
                        alt="<?= htmlspecialchars($b['judul']); ?>">
                    <h4><?= htmlspecialchars($b['judul']); ?></h4>
                    <p><?= htmlspecialchars(substr($b['konten'], 0, 100)); ?>...</p>
                    <a href="blog.php">Selengkapnya →</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ===== AJAKAN DAFTAR ===== -->
    <div class="cta reveal">
        <h2>Daftar Calon Anggota Baru</h2>
        <p>Kami menantikan partisipasi Anda dalam berbagai kegiatan, pelatihan, dan inovasi di HMJ TI.
            Klik tombol di bawah ini untuk mengisi formulir pendaftaran.</p>
        <a href="daftar.php" class="btn-primary">Isi Formulir Pendaftaran</a>
    </div>
    <!-- ===== AJAKAN DAFTAR ===== -->

    <?php include 'footer.php'; ?>

    <script>
        // Intersection Observer untuk animasi scroll
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        document.querySelectorAll('.reveal, .block, .card').forEach(el => observer.observe(el));
    </script>
</body>

</html>
