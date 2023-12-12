<?php
use contents\home\recentBlog;
$recentBlog = new recentBlog();
?>
<section class="s-pt-100 s-pb-100 dark-bg">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="site-header">
                    <h2 class="site-title">Recent blog</h2>
                </div>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-md-6 col-lg-4">
                <div class="/blog-box">
                    <div class="/blog-box-thumb">
                        <img src="/asset/theme1/images/blog/624d61e797df71649238503.jpg" alt="image">
                    </div>
                    <div class="/blog-box-content">
                        <span class="/blog-category">Bitcoin</span>
                        <h3 class="title"><a href="/blog/31/similique-totam-harum-rerum.html"><?=$recentBlog->bh1?></a>
                        </h3>
                        <ul class="/blog-meta">
                            <li><i class="fas fa-clock"></i> 1 year ago</li>
                            <li><i class="fas fa-comment"></i> 0 Comments</li>
                        </ul>
                        <p class="mb-0 mt-3"><?=$recentBlog->bc1?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="/blog-box">
                    <div class="/blog-box-thumb">
                        <img src="/asset/theme1/images/blog/624d62471f5b51649238599.jpg" alt="image">
                    </div>
                    <div class="/blog-box-content">
                        <span class="/blog-category">Crypto</span>
                        <h3 class="title"><a href="/blog/39/facere-asperiores-odio-id-porro.html"><?=$recentBlog->bh2?></a>
                        </h3>
                        <ul class="/blog-meta">
                            <li><i class="fas fa-clock"></i> 1 year ago</li>
                            <li><i class="fas fa-comment"></i> 0 Comments</li>
                        </ul>
                        <p class="mb-0 mt-3"><?=$recentBlog->bc2?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="/blog-box">
                    <div class="/blog-box-thumb">
                        <img src="/asset/theme1/images/blog/624d626242e021649238626.jpg" alt="image">
                    </div>
                    <div class="/blog-box-content">
                        <span class="/blog-category">Coinbase</span>
                        <h3 class="title"><a href="/blog/40/eligendi-distinctio-molestias-ducimus.html"><?=$recentBlog->bh3?></a>
                        </h3>
                        <ul class="/blog-meta">
                            <li><i class="fas fa-clock"></i> 1 year ago</li>
                            <li><i class="fas fa-comment"></i> 0 Comments</li>
                        </ul>
                        <p class="mb-0 mt-3"><?=$recentBlog->bc3?></p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>