<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resep.css">
    <title>Resep</title>
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
                </div>
                <div class="right-content">
                    <div class="main-content-img">
                        <img src="images/burger-keju.png" alt="">
                    </div>
                </div>
            </div>
        </main>
    </section>

    <section class="ingredient-page">
        <div class="ingredient-left-content">
            <div class="ingredient-title">
                <h1>Apa aja sih yang <br> dibutuhin???</h1>
            </div>

            <div class="ingredient-list">
                <p>4 buah roti burger</p>
                <p>2 sdm mentega</p>
                <p>Patty:</p>
                <p>500 g daging sapi cincang</p>
                <p>2 sdm bawang bombay, cincang halus</p>
                <p>1/2 sdt merica bubuk</p>
                <p>1 sdm saus BBQ</p>
                <p>1 sdt garam</p>
                <p>Saus aduk jadi satu:</p>
                <p>100 ml mayones botolan</p>
                <p>1 sdt mustard</p>
                <p>Pelengkap:</p>
                <p>8 lembar keju smoked cheddar</p>
                <p>4 lembar daun selada</p>
                <p>1 buah tomat merah, iris tipis</p>
                <p>2 buah acar timun/gherkins, iris tipis</p>
            </div>
        </div>

        <div class="ingredient-right-content">
            <div class="ingredient-summary">
                <div class="first-content">
                    <h4>Total Waktu Penyajian : 45 Menit</h4>
                    <h4>Untuk Penyajian : 4 Porsi</h4>
                </div>

                <div class="second-content">
                    <h4>Judul Resep : Burger Keju</h4>
                    <h4>Kategori : makanan utama</h4>
                    <h4>Masakan : daging</h4>
                    <h4>Durasi Persiapan : 15 Menit</h4>
                    <h4>Durasi Masakan : 30 Menit</h4>
                    <h4>Total Durasi : 45 Menit</h4>

                </div>
            </div>
        </div>
    </section>

    <section class="tutorial-page">
        <div class="tutorial-left-content">
            <div class="tutorial-title">
                <h1>Cara Pembuatan</h1>
            </div>

            <div class="tutorial-list">
                <p>1.    Patty: Aduk semua bahan menjadi satu dan aduk <br> hingga tercampur rata.</p>
                <p>2.    Bagi adonan menjai 4 bagian, bentuk bulat pipih.</p>
                <p>3.    Panaskan mentega dalam wajan. Panggang roti <br> dengan belahan menghadap ke bawah hingga agak <br> kering lalu angkat.</p>
                <p>4.    Panaskan sisa mentega, masak daging burger <br> hingga matang dan agak kering.</p>
                <p>5.    Taruh di atasnya masing-masing selembar keju <br> cheddar. Biarkan hingga leleh lalu angkat.</p>
                <p>6.    Taruh di atas belahan roti, olesi dengan Sausnya.</p>
                <p>7.    Beri selembar daun selada, tomat, acar timun, <br> dan selembar keju.</p>
                <p>8.    Taruh di atasnya burger dengan topping keju lalu <br> tutup dengan belahan roti yang lain.</p>
                <p>9.    Sajikan hangat.</p>
            </div>
        </div>

        <div class="tutorial-right-content">
            <div class="tutorial-video-title">
                <h3>Lihat cara memasak lebih jelas <br> dengan menonton video dibawah</h3>
            </div>

            <div class="tutorial-video">
                <iframe width="460" height="315" src="https://www.youtube.com/embed/EHQpyfEzQ24?si=qw8763j3zsHXj46l" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <?php
        include "footer.php";
    ?>
</body>
</html>