<?php
include 'navbar.php';
require 'include/config.php';

$query = "SELECT * FROM blog ORDER BY id DESC";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Query error: " . mysqli_error($conn));
}
?>

<div id="layoutSidenav_content">
    <main>
        <header class="page-header">
            <h2>Berita Teknologi Informasi</h2>
            <p>Artikel dan berita terkini seputar dunia Teknologi Informasi dan inovasi digital.</p>
        </header>

        <section class="blog-grid">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <article class="blog-card fade-in">
                    <figure class="blog-img">
                        <img src="admin/img/blog/<?php echo $row['gambar']; ?>" alt="Blog Image">
                    </figure>
                    <div class="blog-content">
                        <h4><?php echo htmlspecialchars($row['judul']); ?></h4>
                        <p><?php echo substr(strip_tags($row['konten']), 0, 150); ?>...</p>
                        <a href="<?php echo $row['link']; ?>" target="_blank">Selengkapnya</a>
                    </div>
                </article>
            <?php endwhile; ?>
        </section>
    </main>
</div>

<?php include 'footer.php'; ?>

<style>
    /* ===== Global ===== */
    body {
        font-family: "Poppins", sans-serif;
        background: linear-gradient(120deg, #eef3ff, #e7f0ff);
        margin: 0;
        color: #222;
    }

    .page-header {
        text-align: center;
        padding: 70px 20px 40px;
    }

    .page-header h2 {
        font-size: 2.6rem;
        color: #1e3a8a;
        letter-spacing: 0.5px;
        margin-bottom: 15px;
    }

    .page-header p {
        max-width: 650px;
        margin: 0 auto;
        color: #444;
    }

    /* ===== Blog Grid ===== */
    .blog-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 32px;
        padding: 40px 6%;
    }

    .blog-card {
        position: relative;
        backdrop-filter: blur(12px);
        background: rgba(255, 255, 255, 0.75);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        transition: transform .35s ease, box-shadow .35s ease;
    }

    .blog-card:hover {
        transform: translateY(-10px) scale(1.03);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2);
    }

    .blog-img img {
        width: 100%;
        height: 230px;
        object-fit: cover;
        display: block;
    }

    .blog-content {
        padding: 22px;
    }

    .blog-content h4 {
        color: #1e3a8a;
        font-size: 1.3rem;
        margin: 0 0 12px;
    }

    .blog-content p {
        color: #333;
        font-size: 0.95rem;
        margin-bottom: 18px;
    }

    .blog-content a {
        text-decoration: none;
        color: #fff;
        background: #1e3a8a;
        padding: 10px 18px;
        border-radius: 8px;
        font-weight: 600;
        transition: background .3s ease, transform .3s ease;
        display: inline-block;
    }

    .blog-content a:hover {
        background: #3b82f6;
        transform: translateY(-2px);
    }

    /* ===== Animations ===== */
    .fade-in {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity .8s ease-out, transform .8s ease-out;
    }

    .fade-in.show {
        opacity: 1;
        transform: translateY(0);
    }

    /* ===== Responsive ===== */
    @media(max-width:600px) {
        .page-header h2 {
            font-size: 2rem;
        }

        .blog-content h4 {
            font-size: 1.15rem;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const fades = document.querySelectorAll(".fade-in");
        const onScroll = () => {
            fades.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 80) el.classList.add("show");
            });
        };
        window.addEventListener("scroll", onScroll);
        onScroll();
    });
</script>