
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container px-4"><a class="navbar-brand" href="./">denyCar</a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <?php
                if (!isset($_SESSION['email'])) {

                ?>

                    <li class="nav-item"><a class="nav-link" href="./login.php">Giriş Yap</a></li>
                    <li class="nav-item"><a class="nav-link" href="./register.php">Üye Ol</a></li>

                <?php } else { ?>

                    <li class="nav-item"><a class="nav-link" href="./profile.php">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="./logout.php">Çıkış yap</a></li>

                <?php } ?>
            </ul>
        </div>
    </div>
</nav>