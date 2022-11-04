<!DOCTYPE html>
<html lang="en">

<head>
    <title>Success | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
</head>

<body id="success">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
        <hr class="hide">
        <article class="wrapper-narrow flex-center">
            <section class="flex-center">
                <dotlottie-player src="/img/lottie/success.lottie" background="transparent" speed="1"
                    autoplay></dotlottie-player>
                <br><br>
                <h1>Form submitted successfully!</h1>
            </section>
            <br>
            <div class="btn-area">
                <a aria-describedby="about" href="/about">
                    <div aria-describedby="about" id="btn">return to about</div>
                    <div class="btn-shadow"></div>
                </a>
            </div>
            </section>
        </article>
        <hr>
    </main>
    <!-- LOTTIE PLAYER SCRIPTS START -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>
    <script src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js" defer></script>
    <!-- LOTTIE PLAYER SCRIPTS START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
</body>

</html>