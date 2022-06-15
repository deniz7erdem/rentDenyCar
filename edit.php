<?php
session_start();
require('mysql.php');

if(isset($_POST['Erent']) and isset($_POST['dateB']) and isset($_POST['dateE'])){
    $sqlu="UPDATE rent SET rent_B='".$_POST['dateB']."',rent_E='".$_POST['dateE']."' WHERE rent_id=".$_POST['Erent'];
    $resu = mysqli_query($baglanti, $sqlu);
    header("Location: profile.php?edit=ok");
}

if (!isset($_SESSION['email']) and isset($_POST['rent_id'])) {

    header("Location: index.php");
} else {

    $sqls = "SELECT * FROM rent WHERE rent_id=".$_POST['rent_id'];
    $ress = mysqli_query($baglanti, $sqls);
    $rent= mysqli_fetch_array($ress);
    
    $sql="SELECT * FROM car WHERE car_id=".$rent['car_id'];
    $res=mysqli_query($baglanti, $sql);
    $car= mysqli_fetch_array($res);

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Düzenle - DenyCar</title>
        <link rel="stylesheet" href="./css/styles.css">
    </head>

    <body>
        <!-- Navigation-->
        <?php include 'partials/_navbar.php' ?>


        <div class="container pt-5">

            <!-- Page Heading -->
            <h1 class="my-4">Kiranı düzenleme ekranına hoş geldin!
                <small></small>
            </h1>
            <p>Aşağıda seçtiğin kiranın tarihlerini düzenleyip kaydedebilirsin.</p>


            <div class="row mb-5 pb-5">

                <div class="col-md-5">
                    <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="./img/<?php echo $car['car_img'] ?>" alt="">
                    </a>
                </div>
                <div class="col-md-7 ml-5">
                    <h3><?php echo $car['car_model'] ?></h3>
                    <p>Başlangıç: <?php echo $rent['rent_B'] ?></p>
                    <p>Bitiş: <?php echo $rent['rent_E'] ?></p>


                        <form action="edit.php" method="post">
                            <input type="hidden" name="Erent" value="<?php echo $rent['rent_id'] ?>">
                            <input type="date" name="dateB" id="dateB" value="<?php echo $rent['rent_B'] ?>">
                            <input type="date" name="dateE" id="dateE" value="<?php echo $rent['rent_E'] ?>">
                            <input type="submit" class="btn btn-success" value="Düzenle">
                        </form>

                </div>
            </div>
        </div>

        <?php include 'partials/_footer.php' ?>
    </body>

    </html>
<?php } ?>