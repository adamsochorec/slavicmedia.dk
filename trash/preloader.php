<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."preloader.php"); ?>


// PRELOADING ANIMATION
$(window).on("load",function(){
$(".loader-wrapper").fadeOut("slow");
});


<aside>
    <div class="loader-wrapper">
        <dotlottie-player class="loader-lottie" src="/lottie/loading.lottie" background="transparent" speed="1" loop
            autoplay></dotlottie-player>
    </div>
</aside>



/* loading animation start */
.loader-lottie{
width: 10%;
}
.loader-wrapper{
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
@media only screen and (max-width:900px){
.loader-lottie{
width: 30%;
}
/* loading animation end */