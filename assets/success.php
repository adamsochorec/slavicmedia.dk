<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Form Submission Success!">
    <meta name="keywords" content="success, form submission">
    <meta name="author" content="Adam Sochorec">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success | Adam Sochorec</title>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."global-head.php"); ?>
</head>

<body id="success">
    <!-- HEADER START -->
    <header>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."global-nav-bar.php"); ?>
    </header>
    <!-- HEADER END -->
    <main>
        <hr class="hide">
        <article class="flex-center">
            <section class="flex-center">
                <dotlottie-player src="/lottie/success.lottie" background="transparent" speed="1"
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
    <!-- FOOTER START -->
    <footer>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>
        <script src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js" defer></script>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."global-footer.php"); ?>
    </footer>
    <!-- FOOTER END -->
</body>

</html>