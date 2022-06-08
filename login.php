<?php
session_start();
require('mysql.php');
if (isset($_POST['email']) and isset($_POST['password'])) {

  $sql = "SELECT * FROM `user` WHERE user_email='" . $_POST['email'] . "' AND user_password='" . $_POST['password']."'";

  $res = mysqli_query($baglanti, $sql);

  if (!$res) {
    echo '<br>Hata:' . mysqli_error($baglanti); 
  }

  $say = mysqli_num_rows($res);
  if ($say == 1) {

    $_SESSION['email'] = $_POST['email'];
  } else {

    $mesaj = "<h1> Hatalı Kullanıcı adı veya Şifre!</h1>";
  }
}
if (isset($_SESSION['email'])){ 
   
  header("Location: index.php"); 
  
  }else{ 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giriş Yap - denyCarRent</title>
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
                <h3 class="login-heading mb-4">Tekrar Hoş geldin!</h3>

                <!-- Sign In Form -->
                <form action="login.php" method="POST">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    <label for="email">E-posta Adresi</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="password">Şifre</label>
                  </div>

                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                    <label class="form-check-label" for="rememberPasswordCheck">
                      Şifremi Hatırla
                    </label>
                  </div>

                  <div class="d-grid">
                    <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Sign in</button>
                    <div class="text-center">
                      <a class="small" href="#">Henüz üye değil misin? Hemen ol!</a>
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
</body>

</html>
<?php } ?>