<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."preloader.php"); ?>


<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"></script>

<div class="loader-wrapper">
    <dotlottie-player class="loader-lottie" src="/lottie/loading.lottie" background="transparent"
        speed=" 1" loop
        autoplay></dotlottie-player>
</div>

<style>
.loader-lottie {
    transform: scale(50%);
}

.loader-wrapper {
    background: var(--black-color);
    opacity: 70%;
    height: 100vh;
    width: 100%;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    z-index: 99999999;
}
</style>


// PRELOADING ANIMATION
$(window).on("load", function () {
$(".loader-wrapper").fadeOut("slow");
});