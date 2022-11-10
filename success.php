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
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <main>
        <article class="wrapper-narrow flex-center">
            <section class="flex-center">
                <dotlottie-player src="/img/lottie/success.lottie" background="transparent" speed="1"
                    autoplay></dotlottie-player>
                <br>
                <h1>Form submitted<br>successfully!</h1>
            </section>
            <br>
            <h2><a aria-describedby="/contact" href="/contact">Return to Contact page <svg
                        id="chevron-right"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 384 512">
                        <path
                            d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                </a></h2>
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