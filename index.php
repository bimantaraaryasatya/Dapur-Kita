<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Dapur Kita</title>
</head>
<body>
    <?php
        include "navbar.php";
    ?>

    <section class="main-content">
        <main class="container">
            <div class="background">
                <div class="left-content">
                    <div class="main-content-title">
                        <h1>Burger Keju</h1>
                    </div>

                    <div class="main-content-description">
                        <p>Burger keju adalah hamburger yang disisipi keju. <br> Pembuatannya adalah keju dipotong tipis, lalu dibiarkan <br> sesaat agar keju meleleh. Di Amerika Serikat, keju yang <br> dipakai kebanyakan adalah keju Amerika, tetapi keju seperti <br> mozzarella, keju biru, keju pepperjack, dan keju Cheddar juga <br> populer.</p>
                    </div>

                    <div class="main-content-button">
                        <a href="resep.php">Lihat Resep</a>
                    </div>
                </div>
                <div class="right-content">
                    <div class="main-content-img">
                        <img src="images/burger-keju.png" alt="">
                    </div>
                </div>
            </div>
        </main>
    </section>

    <section class="recomendation-product-page">
        <div class="title">
            <h1>Rekomendasi</h1>
        </div>
        <div class="recomendation-product-container">
            <div class="card">
                <img src="images/kue-rekomendasi.png" alt="">
                <p>Kue</p>
            </div>

            <div class="card">
                <img src="images/sayuran-rekomendasi.png" alt="">
                <p>Sayuran</p>
            </div>

            <div class="card">
                <img src="images/makananringan-rekomendasi.png" alt="">
                <p>Makanan Ringan</p>
            </div>

            <div class="card">
                <img src="images/minuman-rekomendasi.png" alt="">
                <p>Minuman</p>
            </div>
        </div>
    </section>

    <section class="quick-recipe-page">
        <div class="title">
            <h1>Cepat & Mudah</h1>
        </div>
        <div class="quick-recipe-container">
            <div class="card">
                <div class="card-img">
                    <img src="images/Cromboloni.png" alt="">
                </div>

                <div class="card-summary">
                    <h3>Cromboloni</h3>
                    <p>Cromboloni adalah jajanan yang merupakan perpaduan antara croissant dan bomboloni. Croissant adalah...</p>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="images/lemon-tea.png" alt="">
                </div>

                <div class="card-summary">
                    <h3>Lemon Tea</h3>
                    <p>Lemon tea adalah varian teh yang dibuat dengan perasaan jeruk nipis, kemudian disajikan dengan irisan lemon. Minuman ini...</p>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="images/Cromboloni.png" alt="">
                </div>

                <div class="card-summary">
                    <h3>Cromboloni</h3>
                    <p>Cromboloni adalah jajanan yang merupakan perpaduan antara croissant dan bomboloni. Croissant adalah...</p>
                </div>
            </div>
        </div>
    </section>

    <?php
        include "footer.php";
    ?>
</body>
</html>