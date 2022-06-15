<?php
session_start();
require('mysql.php');
if (isset($_POST['rent_id'])) {

    $sqld = "DELETE FROM rent WHERE rent_id=" . $_POST['rent_id'];
    $resd = mysqli_query($baglanti, $sqld);
}
if (!isset($_SESSION['email'])) {

    header("Location: index.php");
} else {


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profil - DenyCar</title>
        <link rel="stylesheet" href="./css/styles.css">
    </head>

    <body>
        <!-- Navigation-->
        <?php include 'partials/_navbar.php' ?>

        <!-- Page Content -->
        <div class="container pt-5">

            <!-- Page Heading -->
            <h1 class="my-4">Tekrar Hoş Geldin Kullanici!
                <small></small>
            </h1>
            <p>Aşağıda yaptığın kiralamaları görüntelyebilirsin.</p>
            <?php if(isset($_GET['edit'])){ ?>
            <div class="alert alert-success" role="alert">
                Kira tarihleriniz başarıyla düzenlendi!
            </div>
            <?php } ?>
            <?php
            if (isset($resd)) {
                if ($resd == 1) {
            ?>
                    <div class="alert alert-success" role="alert">
                        Kiralamanız başarı ile iptal edildi !
                    </div>
            <?php
                }else{
                    ?>
                    <div class="alert alert-danger" role="alert">
                        Hata!
                    </div>
                    <?php
                }
            }
            ?>
            <hr>

            <?php

            $email = 'SELECT user_id FROM user WHERE user_email="' . $_SESSION['email'] . '"';
            $res = mysqli_query($baglanti, $email);
            $userid = mysqli_fetch_array($res);
            $sql = "SELECT * FROM rent WHERE user_id=" . $userid['user_id'];
            $res = mysqli_query($baglanti, $sql);
           
            while ($rent = mysqli_fetch_array($res)) {
                // if(true){
                   //COUNT@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@Q
                //     break;
                // }
                $rsql = 'SELECT * FROM car WHERE car_id=' . $rent['car_id'];
                $rres = mysqli_query($baglanti, $rsql);
                $car = mysqli_fetch_array($rres)

            ?>

                <!-- Project Four -->
                <div class="row">

                    <div class="col-md-5">
                        <a href="#">
                            <img class="img-fluid rounded mb-3 mb-md-0" src="./img/<?php echo $car['car_img'] ?>" alt="">
                        </a>
                    </div>
                    <div class="col-md-7 ml-5">
                        <h3><?php echo $car['car_model'] ?></h3>
                        <p>Başlangıç: <?php echo $rent['rent_B'] ?></p>
                        <p>Bitiş: <?php echo $rent['rent_E'] ?></p>

                        <?php if ($rent['rent_B'] < date('Y/m/d', time())) { ?>
                            <form action="profile.php" method="post">
                                <input type="hidden" name="rent_id" value="<?php echo $rent['rent_id'] ?>">
                                <input type="submit" class="btn btn-danger" value="İptal et">
                            </form>
                            <form action="edit.php" method="post">
                                <input type="hidden" name="rent_id" value="<?php echo $rent['rent_id'] ?>">
                                <input type="submit" class="btn btn-warning mt-1" value="Düzenle">
                            </form>
                        <?php } ?>

                    </div>
                </div>
                <!-- /.row -->

                <hr>

            <?php } ?>
        </div>
        <!-- /.container -->
        <?php include 'partials/_footer.php' ?>
    </body>

    </html>
<?php } ?>