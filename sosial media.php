<?php
include('navbar.php');
?>

<div class="social-wrapper">
    <div class="social-container">
        <!-- Logo & Deskripsi -->
        <div class="social-header">
            <img src="images/logo hmjti panjang.png" alt="Logo HMJ TI">
            <h2>Himpunan Mahasiswa Jurusan Teknologi Informasi</h2>
            <p>
                Ikuti dan dukung berbagai kegiatan HMJ TI – mulai dari seminar teknologi,
                pelatihan digital, hingga kolaborasi inovasi kampus.
                Dapatkan info terbaru seputar teknologi dan pengembangan diri mahasiswa.
            </p>
        </div>

        <!-- Link Media Sosial -->
        <div class="social-links">
            <a href="https://www.tiktok.com/@hmjti.polinela" target="_blank" class="social-card tiktok">
                <i class="fab fa-tiktok"></i>
                <span>TikTok</span>
            </a>
            <a href="https://www.youtube.com/HMJ TI POLINELA" target="_blank" class="social-card youtube">
                <i class="fab fa-youtube"></i>
                <span>YouTube</span>
            </a>
            <a href="mailto:hmjjti@polinela.ac.id" target="_blank" class="social-card email">
                <i class="fas fa-envelope"></i>
                <span>Email</span>
            </a>
            <a href="https://instagram.com/hmjtipolinela" target="_blank" class="social-card instagram">
                <i class="fab fa-instagram"></i>
                <span>Instagram</span>
            </a>
            <a href="https://wa.me/6281234567890" target="_blank" class="social-card whatsapp">
                <i class="fab fa-whatsapp"></i>
                <span>WhatsApp</span>
            </a>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    html,
    body {
        height: 100%;
        margin: 0;
        font-family: "Poppins", sans-serif;
        background: linear-gradient(135deg, #e6f0ff, #f8fafc);
        display: flex;
        flex-direction: column;
    }

    .social-wrapper {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
    }

    .social-container {
        max-width: 800px;
        width: 100%;
        text-align: center;
        animation: fadeIn 1s ease forwards;
    }

    /* ===== Logo & Deskripsi ===== */
    .social-header img {
        max-width: 150px;
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        margin-bottom: 20px;
    }

    .social-header h2 {
        font-size: 1.9rem;
        color: #0d47a1;
        margin-bottom: 12px;
        font-weight: 600;
    }

    .social-header p {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
        margin-bottom: 35px;
        padding: 0 10px;
    }

    /* ===== Kartu Media Sosial ===== */
    .social-links {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        gap: 20px;
    }

    .social-card {
        background: #fff;
        border-radius: 16px;
        padding: 20px 12px;
        text-decoration: none;
        color: #333;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        transition: transform .3s, box-shadow .3s, background .3s, color .3s;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .social-card i {
        font-size: 1.8rem;
        margin-bottom: 6px;
    }

    .social-card span {
        font-weight: 600;
        font-size: 0.95rem;
    }

    .social-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.18);
        color: #fff;
    }

    /* Brand hover colors */
    .tiktok:hover {
        background: #000000;
    }

    .youtube:hover {
        background: #ff0000;
    }

    .email:hover {
        background: #0d6efd;
    }

    .instagram:hover {
        background: #e1306c;
    }

    .whatsapp:hover {
        background: #25d366;
    }

    /* Animasi */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ===== Responsif ===== */
    @media (max-width: 768px) {
        .social-header h2 {
            font-size: 1.6rem;
        }

        .social-header p {
            font-size: 0.95rem;
        }
    }

    @media (max-width: 480px) {
        .social-header h2 {
            font-size: 1.4rem;
        }

        .social-header p {
            font-size: 0.9rem;
        }

        .social-card i {
            font-size: 1.5rem;
        }

        .social-card span {
            font-size: 0.9rem;
        }
    }
</style>