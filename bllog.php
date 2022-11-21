<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Blog | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
</head>

<body id="blog">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
        <article class="wrapper-standard">
            <div class="pathname-container"><i><span class="pathname"><a href="/works">adamsochorec</a></span><span
                        class="pathname-current"> / Blog</span></i></div><br>
            <h1>Articles</h1><br>
            <section class="grid-container">
                <a class="hh-stretch" href="/blog/cybersecurity">
                    <div class="grid-item grid-item-7">
                        <h3>Cybersecruity</h3>
                    </div>
                </a>
                <a class="blog-1 blog"href="/blog/blog-1">
                    <div class="grid-item grid-item-1">
                        <img src="/blog/img/blog-1/jpg/1.jpg" alt="#">
                    </div>
                    <h6></h6>
                </a>
                <a class="blog-2 blog" href="/blog/blog-2">
                    <div class="grid-item grid-item-2">
                        <img src="/blog/img/blog-2/jpg/1.jpg" alt="#">
                    </div>
                    <h6></h6>
                </a>
                <a class="blog-3 blog" href="/blog/blog-3">
                    <div class="grid-item grid-item-3">
                        <img src="/blog/img/blog-3/jpg/1.jpg" alt="#">
                    </div>
                    <h6></h6>
                </a>
                <a class="blog-4 blog" href="/blog/blog-4">
                    <div class="grid-item grid-item-4">
                        <img src="/blog/img/blog-4/jpg/1.jpg" alt="#">
                    </div>
                    <h6></h6>
                </a>
                <a class="blog-5 blog" href="/blog/blog-5">
                    <div class="grid-item grid-item-5">
                        <img src="/blog/img/blog-5/jpg/1.jpg" alt="#">
                    </div>
                    <h6></h6>
                </a>
                <a class="blog-6 blog" href="/blog/blog-6">
                    <div class="grid-item grid-item-6">
                        <img src="/blog/img/blog-6/jpg/1.jpg" alt="#">
                    </div>
                    <h6></h6>
                </a>        
            </section>
        </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
</body>

</html>