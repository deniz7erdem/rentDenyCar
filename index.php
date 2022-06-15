<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Rent a Car">
    <meta name="author" content="Deniz Erdem">
    <title>DenyCar</title>
    <link href="css/styles.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Navigation-->
    <?php include 'partials/_navbar.php' ?>
    <!-- Header-->
    <header class="bg-dark bg-gradient text-white">
        <div class="container px-4 text-center">
            <h1 class="fw-bolder">denyCar ile Kolay Araç Kiralamaya Hoş Geldin</h1>
            <p class="lead">denyCar çok hızlı bir biçimde araç kiralamanız için tasarlandı.</p>
            <form action="cars.php" method="GET"> <br>
                <p>Başlangıç: <input type="date" class="btn btn-sm btn-light" name="bdate" id="bdate" value='<?php date_default_timezone_set('Europe/Istanbul'); echo date('Y-m-d', time()); ?>' required>
                Bitiş: <input type="date" class="btn btn-sm btn-light" name="edate" id="edate" required>
                <input type="submit" class="btn btn-sm btn-light" value="Ara"></p>
            </form>

        </div>
    </header><!-- About section-->
    <section id="about">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Hakkımızda</h2>
                    <p class="lead">Türkiye'nin öncü araba kiralama platformu denyCar olarak amacımız sizlere çok uygun fiyatlara çok yüksek kalite araç kiralama hizmeti sunmaktır.</p>
                    <ul>
                        <li>Paranız cebinizde kalsın</li>
                        <li>En yüksek kalitenin keyfini çıkarın</li>
                        <li>İstediğiniz zamana kiralayın, istediğiniz zaman iptal edin</li>
                        <li>İstediğiniz şubeden alın, istediğiniz şubeye bırakın</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- Contact section-->
    <section class="bg-light" id="services">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Bize Ulaşın</h2>
                    <p class="lead">Herhangi bir sorun, istek veya şikyet için müşteri hizmetlerimizi arayabilir, fax çekebilir veya iletişim eposta adresimize bir posta bırakabilirsiniz.</p>
                    <p>Telefon : +90 512 345 67 89</p>
                    <p>Fax : +90 212 345 67 89</p>
                    <p>E-posta : iletisim@denycartest.xyz.tr</p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'partials/_footer.php' ?>
</body>

</html>