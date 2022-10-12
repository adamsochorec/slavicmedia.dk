<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
</head>

<body>
    <!-- HEADER START -->
    <header>
        <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
        include $IPATH . 'global-nav-bar.php';
        ?>
    </header>
    <!-- HEADER END -->
    <aside class="table-of-contents">
        <!-- SCROLL STATUS -->
        <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
        include $IPATH . 'global-progress-bar.php';
        ?>
    </aside>
    <main>
        <article class="wrapper-standard post-content">
            <h1>Blåvand<h1>
                    <img src="">
                    <hr>
        </article>
    </main>
    <!-- FOOTER START -->
    <footer>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
        include $IPATH . 'global-footer.php';
        ?>
    </footer>
    <!-- FOOTER END -->
</body>

</html>