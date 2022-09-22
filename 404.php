<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="The page you’re looking for can’t be found.">
    <meta name="keywords" content="Page not found, 404, 404 Error, Error">
    <meta name="author" content="Adam Sochorec">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found | Adam Sochorec</title>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."head-links.php"); ?>
</head>

<body id="Error">
    <!-- HEADER START -->
    <header>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."header-nav.php"); ?>
    </header>
    <!-- HEADER END -->
    <main>
        <hr class="hide">
        <article class="wrapper narrow">
            <section class="flex-center">
                <lottie-player class="error-lottie" src="/lottie/404.json"
                    background="transparent" speed="0.7"
                    loop
                    autoplay></lottie-player>
            </section>
            <br>
            <h1 id="Error" class="v2">The page you’re looking for can’t be found.</h1>
            <br>
            <section class="flex-center">
                <div class="inputBox">
                    <a aria-describedby="works" href="works">
                        <div aria-describedby="works" id="btn">return to frontpage</div>
                    </a>
                </div>
            </section>
        </article>
        <hr>
    </main>
    <!-- FOOTER START -->
    <footer>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."footer.php"); ?>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"></script>
    </footer>
    <!-- FOOTER END -->
</body>

</html>