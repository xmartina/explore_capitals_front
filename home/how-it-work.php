<?php
use contents\home\howItWork;
$htw = new howItWork();
?>
<section class="s-pt-100 s-pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="site-header">
                    <h2 class="site-title">How it work</h2>
                </div>
            </div>
        </div>

        <div class="row gy-5 work-wrapper">
            <div class="col-lg-4">
                <div class="work-box">
                    <div class="icon">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="content">
                        <h3 class="title">Create account</h3>
                        <p><?= $htw->h1; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="work-box">
                    <div class="icon">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="content">
                        <h3 class="title">Choose plan</h3>
                        <p><?= $htw->h2; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="work-box">
                    <div class="icon">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="content">
                        <h3 class="title">Get profit</h3>
                        <p><?= $htw->h3; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>