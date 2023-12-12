<?php
use contents\home\whyChooseUs;
$whychus = new whyChooseUs();
?>
<section class="s-pt-100 s-pb-100">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="site-header">
                    <h2 class="site-title">Why choose us</h2>
                </div>
            </div>
        </div>

        <div class="row gy-4 feature-wrapper">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box">
                    <div class="icon">
                        <div class="icon-line">
                            <span class="icon-line-dot icon-line-dot-one"></span>
                            <span class="icon-line-dot icon-line-dot-two"></span>
                            <span class="icon-line-dot icon-line-dot-three"></span>
                        </div>
                        <div class="icon-inner">

                            <i class="far fa-compass"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3 class="title mb-3"><?= $whychus->egh; ?></h3>
                        <p class="mb-0"><?= $whychus->egc; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box">
                    <div class="icon">
                        <div class="icon-line">
                            <span class="icon-line-dot icon-line-dot-one"></span>
                            <span class="icon-line-dot icon-line-dot-two"></span>
                            <span class="icon-line-dot icon-line-dot-three"></span>
                        </div>
                        <div class="icon-inner">

                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3 class="title mb-3"><?= $whychus->trh; ?></h3>
                        <p class="mb-0"><?= $whychus->trc; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box">
                    <div class="icon">
                        <div class="icon-line">
                            <span class="icon-line-dot icon-line-dot-one"></span>
                            <span class="icon-line-dot icon-line-dot-two"></span>
                            <span class="icon-line-dot icon-line-dot-three"></span>
                        </div>
                        <div class="icon-inner">

                            <i class="fas fa-user-secret"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3 class="title mb-3"><?= $whychus->dph; ?></h3>
                        <p class="mb-0"><?= $whychus->dpc; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box">
                    <div class="icon">
                        <div class="icon-line">
                            <span class="icon-line-dot icon-line-dot-one"></span>
                            <span class="icon-line-dot icon-line-dot-two"></span>
                            <span class="icon-line-dot icon-line-dot-three"></span>
                        </div>
                        <div class="icon-inner">

                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3 class="title mb-3"><?= $whychus->cth; ?></h3>
                        <p class="mb-0"><?= $whychus->ctc; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box">
                    <div class="icon">
                        <div class="icon-line">
                            <span class="icon-line-dot icon-line-dot-one"></span>
                            <span class="icon-line-dot icon-line-dot-two"></span>
                            <span class="icon-line-dot icon-line-dot-three"></span>
                        </div>
                        <div class="icon-inner">

                            <i class="fas fa-registered"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3 class="title mb-3"><?= $whychus->smh; ?></h3>
                        <p class="mb-0"><?= $whychus->smc; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box">
                    <div class="icon">
                        <div class="icon-line">
                            <span class="icon-line-dot icon-line-dot-one"></span>
                            <span class="icon-line-dot icon-line-dot-two"></span>
                            <span class="icon-line-dot icon-line-dot-three"></span>
                        </div>
                        <div class="icon-inner">

                            <i class="fas fa-fingerprint"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h3 class="title mb-3"><?= $whychus->psh; ?></h3>
                        <p class="mb-0"><?= $whychus->psc; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Services Section -->