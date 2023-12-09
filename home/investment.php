<?php
// Prepare and execute the SQL query
$stmt = $conn->prepare("SELECT name, min_deposit, max_deposit, percent FROM hm2_plans");
$stmt->execute();

// Fetch the results
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<section class="s-pt-100 s-pb-100 dark-bg">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="site-header">
                    <h2 class="site-title">Investment plan</h2>
                </div>
            </div>
        </div>

        <div class="row gy-4">
            <?php foreach ($results as $row) { ?>
            <div class="col-lg-4 col-md-6">
                <div class="invest-plan">
                    <div class="invest-plan-shape"></div>
                    <div class="invest-plan-top">
                        <h4 class="invest-plan-name"><?=$row['name'] ?></h4>
                        <h5 class="invest-plan-amount"><?=$row['percent']?> %
                        </h5>
                        <p class="mb-0">Every ROI Time</p>
                    </div>

                    <div class="invest-plan-middle">
                        <h5 class="invest-plan-min-max">
                            Min $<?=$row['min_deposit']?>
                        </h5>
                        <h5 class="invest-plan-min-max">
                            Min $<?=$row['max_deposit']?>
                        </h5>
                        <ul class="invest-plan-features">
                            <li>

                                Lifetime

                            </li>


                            <li>Capital back No</li>
                        </ul>

                        <h6 class="mt-4 mb-3">Affiliate bonus</h6>
                        <ul class="plan-referral justify-content-center">
                            <div class="single-referral">
                                <span>1 %</span>
                                <p>level 1</p>
                            </div>
                            <div class="single-referral">
                                <span>2 %</span>
                                <p>level 2</p>
                            </div>
                            <div class="single-referral">
                                <span>3 %</span>
                                <p>level 3</p>
                            </div>
                        </ul>
                    </div>
                    <div class="invest-plan-action mt-3">
                        <a class="sp_theme_btn w-100 mb-3" href="login.html">Invest now</a>

                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>