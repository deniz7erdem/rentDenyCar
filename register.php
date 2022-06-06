<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Ol - denyCarRent</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>
        .login {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('https://source.unsplash.com/WEQbe2jBg40/600x1200');
            background-size: cover;
            background-position: center;
        }

        .login-heading {
            font-weight: 300;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }
    </style>
    <?php
    include 'mysql.php';
    if (isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])) {
        $sql = 'INSERT INTO user(user_name,user_surname,user_email,user_password) VALUES ("' . $_POST['name'] . '","' . $_POST['lastname'] . '","' . $_POST['email'] . '","' . $_POST['password'] . '");';
        $res = mysqli_query($baglanti, $sql);
        if (!$res) {
            $err = "false";
        } else {
            $err = "true";
        }
    } else {
    }

    ?>
</head>


<body>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <div class="alert alert-success" role="alert" id='hesapT' hidden>
                                    Hesap Başarıyla Oluşturuldu!
                                </div>
                                <div class="alert alert-danger" role="alert" id='hesapF' hidden>
                                    Hesap Oluşturulamadı!
                                </div>
                                <h3 class="login-heading mb-4">Hemen Üye Ol!</h3>

                                <!-- Sign In Form -->
                                <form action="register.php" method="POST">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                        <label for="name">Ad</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                                        <label for="lastname">Soy Ad</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                                        <label for="floatingInput">E-posta Adresi</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                                        <label for="floatingPassword">Şifre</label>
                                    </div>

                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck" required>
                                        <label class="form-check-label" for="rememberPasswordCheck">
                                            Kullanıcı sözleşmesini kabul ediyorum.
                                        </label>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Üye Ol</button>
                                        <div class="text-center">
                                            <a class="small" href="./login.php">Zaten hesabın var mı? Giriş Yap!</a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var hesapT = document.getElementById('hesapT');
        var hesapF = document.getElementById('hesapF');
        if (<?php echo $err ?>) {
            hesapT.removeAttribute("hidden");
        } else {
            hesapF.removeAttribute("hidden");

        }
    </script>
</body>

</html>