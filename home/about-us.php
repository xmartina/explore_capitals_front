<?php
use contents\home\aboutUs;
$aboutUs = new aboutUs();
?>
<section class="about-section s-pt-100 s-pb-100 dark-bg">
    <div class="shape-el">
        <img src="/asset/theme1/images/about/flow-chart.png" alt="image">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-thumb">
                    <div class="about-thumb-inner">
                        <img src="/asset/theme1/images/about/6257a3187a4ca1649910552.png" alt="image">
                        <div class="about-thumb-line about-thumb-line-one"></div>
                        <div class="about-thumb-line about-thumb-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="site-title"><?= $aboutUs->ah; ?></h2>
                <p class="text-white text-justifys descripton-root">
                    <strong></strong><span
                        style="color:rgb(0,0,0);font-family:'Open Sans', Arial, sans-serif;font-size:14px;text-align:justify;"><?= $aboutUs->ac; ?></span><br>
                </p>
                <a href="/about" class="sp_theme_btn mt-4">Learn more</a>
            </div>
        </div>

    </div>
</section>