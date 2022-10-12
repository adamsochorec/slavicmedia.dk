<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="Portfolio, Works, Photography, Photos, 3D, 3D scans, Animations, Art">
    <meta name="author" content="Adam Sochorec">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expo 2023 | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
</head>

<body id="expo-in-kolding">
    <!-- HEADER START -->
    <header>
        <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
        include $IPATH . 'global-nav-bar.php';
        ?>
    </header>
    <!-- HEADER END -->
    <!-- SCROLL STATUS START -->
    <aside>
        <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
        include $IPATH . 'global-progress-bar.php';
        ?>
    </aside>
    <!-- SCROLL STATUS END -->
    <main>
        <article class="wrapper-standard">
            <h1 class="page-start-margin">Expo in Knuds garage</h1>
            <br>
            <section>
                <h2>Jan 2023 - Feb 2023</h2>
                <br>
                <p>
                    I have the great pleasure to invite you to the first official exposition of my works!<br>
                    The expo is going to be in inner spaces of the <a href="https://knuds-garage.business.site/">
                        Knud's Garage</a> in Kolding.<br>You can take a look on
                    my on
                    large scale prints framed in historical frames series, on which I was working on last spring.
                </p>
                <hr>
            </section>
            <section class="expo grid-container">
                <section class="expo grid-item">
                    <fieldset>
                        <legend>
                            <h3>Knuds Garage</h3>
                        </legend>
                        <p>Munkegade 5A<br>6000 Kolding<br>Denmark 🇩🇰</p>
                    </fieldset>
                </section>
                <section class="expo grid-item">
                    <fieldset>
                        <legend>
                            <h3>Opening hours</h3>
                        </legend>
                        <p>Mon - Sat<br>12.00-02.00<br>Sun:<br>14.00-22.00</p>
                    </fieldset>
                </section>
                <br><br>
            </section>
            <div class="btn-area flex-center">
                <a aria-describedby="about"
                    href="https://www.google.com/maps/dir//Knuds+Garage,+Munkegade+5A,+6000+Kolding,+Denmark/@55.4896193,9.4774543,17z/data=!4m15!1m6!3m5!1s0x0:0x4beb056a0a3fdde7!2sKnuds+Garage!8m2!3d55.4896141!4d9.4775472!4m7!1m0!1m5!1m1!1s0x464c9f7aed9ccbcd:0x4beb056a0a3fdde7!2m2!1d9.4775472!2d55.4896141?hl=en">
                    <div aria-describedby="about" id="btn">get directions</div>
                    <div class="btn-shadow"></div>
                </a>
            </div>
            <hr>
            <picture>
                <source srcset="/img/avif/IMG_0438.avif" type="image/avif">
                <img src="/img/jpg/IMG_0438.jpg"
                    alt="#">
            </picture>
            </section>
        </article>
        <hr>
    </main>
    <!-- FOOTER START -->
    <footer>
        <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
        include $IPATH . 'global-footer.php';
        ?>
    </footer>
    <!-- FOOTER END -->
</body>

</html>