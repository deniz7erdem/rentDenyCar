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
            <form action="cars.php" method="GET">
                <p>Başlangıç:</p> <input type="date" class="btn btn-sm btn-light" name="bdate" id="bdate">
                Bitiş: <input type="date" class="btn btn-sm btn-light" name="edate" id="edate">
                <input type="submit" class="btn btn-sm btn-light" value="Ara">
            </form>

        </div>
    </header><!-- About section-->
    <section id="about">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Hakkımızda</h2>
                    <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
                    <ul>
                        <li>Clickable nav links that smooth scroll to page sections</li>
                        <li>Responsive behavior when clicking nav links perfect for a one page website</li>
                        <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
                        <li>Minimal custom CSS so you are free to explore your own unique design options</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- Services section-->
    <section class="bg-light" id="services">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Services we offer</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                </div>
            </div>
        </div>
    </section><!-- Contact section-->
    <section id="contact">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Contact us</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'partials/_footer.php' ?>
</body>

</html>