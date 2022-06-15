<?php
session_start();

include 'mysql.php';
$sql = "SELECT user_id FROM user WHERE user_email='" . $_SESSION['email'] . "'";
$userid = mysqli_query($baglanti, $sql);
$userid = mysqli_fetch_array($userid);
// echo $userid['user_id'];
$sql = "INSERT INTO rent(rent_B,rent_E,user_id,car_id) VALUES ('" . $_POST['rent_B'] . "','" . $_POST['rent_E'] . "'," . $userid['user_id'] . "," . $_POST['car_id'] . ")";
$res = mysqli_query($baglanti,$sql);
echo $res;
// $hata=false;
// if(!$res){
//     $hata=true;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirala - DenyCar</title>
    <link rel="stylesheet" href="./css/styles.css">
    <style>
        .masthead {
            height: 100vh;
            min-height: 500px;
            background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <!-- Navigation-->
    <?php include 'partials/_navbar.php' ?>

    <!-- Full Page Image Header with Vertically Centered Content -->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="fw-light">Aracı başarı ile kiraladınız!</h1>
                    <p class="lead">İptal etmek veya diğer kiralamarınız için profilinizi ziyaret edebilirsiniz.</p>
                    <p><?php  ?></p>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
            <h2 class="fw-light">Page Content</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ab nulla dolorum autem nisi officiis
                blanditiis voluptatem hic, assumenda aspernatur facere ipsam nemo ratione cumque magnam enim fugiat
                reprehenderit expedita.</p>
        </div>
    </section>

    <?php include './partials/_footer.php' ?>
</body>

</html>