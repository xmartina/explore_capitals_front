<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <div class="logo me-auto me-lg-0"><a href="/">
                <span>
                    <img class="img-fluid rounded sm-device-img text-align" src="/asset/front/img/logo.png" width="100%" alt="pp">
                </span>
            </a>
        </div>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <?php $topUrl = $_SERVER['REQUEST_URI']
                ?>
                <li class="<?php if ($topUrl == '/') { ?> active <?php } ?>"><a class="nav-link" href="/">Home</a></li>
                <li class="<?php if ($topUrl == '/investment/') { ?> active <?php } ?>"><a class="nav-link" href="/investment/plan.html">Investment plans</a>
                </li>

                <li class="<?php if ($topUrl == '/about/') { ?> active <?php } ?>"><a class="nav-link" href="/about">About</a>
                </li>
                <li class="<?php if ($topUrl == '/contact/') { ?> active <?php } ?>"><a class="nav-link" href="/contact">Contact</a>
                </li>
<!--                <li class="--><?php //if ($topUrl == '/blog/') { ?><!-- active --><?php //} ?><!--"><a class="nav-link" href="blogs.html">Blog</a></li>-->


                <li class="d-md-block d-lg-none d-block ">
                    <a class="nav-link" href="login.html">Login</a>
                </li>


                <li class=" d-sm-block d-md-block d-lg-none">
                    <select class="custom-select-form selectric ms-3 rounded changeLang nav-link scrollto"
                            aria-label="Default select example">
                        <option value="ka">
                            Georgia
                        </option>
                        <option value="pt">
                            Portuguese
                        </option>
                        <option value="fr">
                            Francais
                        </option>
                        <option value="afr">
                            Afrikaans
                        </option>
                        <option value="spanish">
                            Spanish
                        </option>
                        <option value="EN">
                            English
                        </option>
                    </select>
                </li>


            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <div class="header-right d-flex d-none  d-md-none d-lg-block">
            <a href="login.html" class="sp_btn_border sp_btn_sm me-3">Login</a>
            <select class="changeLang" aria-label="Default select example">
                <option value="ka">
                    Georgia
                </option>
                <option value="pt">
                    Portuguese
                </option>
                <option value="fr">
                    Francais
                </option>
                <option value="afr">
                    Afrikaans
                </option>
                <option value="spanish">
                    Spanish
                </option>
                <option value="EN">
                    English
                </option>
            </select>
        </div>
    </div>
</header>
<main id="main" class="main-img">