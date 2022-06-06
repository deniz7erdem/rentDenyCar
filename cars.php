<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Rent a Car">
    <meta name="author" content="Deniz Erdem">
    <title>Uygun araçlar - DenyCar</title>
    <link href="css/styles.css" rel="stylesheet">
</head>

<body id="page-top">
    <?php include 'mysql.php' ?>
    <!-- Navigation-->
    <?php include 'partials/_navbar.php' ?>
    <!-- Page Content -->
    <div class="container mt-3 pt-3">

        <!-- Page Heading -->
        <h1 class="my-4">Size en uygun araçlar aşağıda
            <small></small>
        </h1>
        <div class="row">
            <div class="col-12 mb-5">
                Başlangıç <input type="date" value='<?php echo $_GET['bdate'] ?>' name="bdate" id="bdate">
                Bitiş <input type="date"  value='<?php echo $_GET['edate'] ?>' name="edate" id="edate">
                <input type="submit" value="Ara" class="btn btn-dark">
            </div>
        </div>
        <!-- Project One -->



        <?php $sql = 'SELECT * FROM car';
        $res = mysqli_query($baglanti, $sql);
        while ($car = mysqli_fetch_array($res)) {

        ?>
            <div class="row">
                <div class="col-4">
                    <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="https://via.placeholder.com/700x300" alt="">
                    </a>

                </div>
                <div class="col-md-5">
                    <h3><?php echo $car['car_model'] ?></h3>
                    <p><?php echo $car['car_fuel'] ?></p>
                    <small class="text-success">ARAÇ MÜSAİT</small>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="fw-bold">₺<?php echo $car['car_price'] ?> günlük</p>
                            <?php $day=strtotime($_GET['edate']) - strtotime($_GET['bdate']);
                            $day= $day / (60 * 60 * 24); ?>
                            <p>Toplam: ₺<?php echo $day*$car['car_price'] ?></p>
                            <form action="rent.php" method="GET">
                                <input type="hidden" name="car_id" value="<?php echo $car['car_id'] ?>">
                                <input type="submit" class="btn btn-primary" value="Kirala">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        <?php
        }
        ?>

        <!-- /.row -->



        <!-- Pagination -->
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>

    </div>
    <!-- /.container -->
    <?php include 'partials/_footer.php' ?>
</body>

</html>