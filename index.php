<?php
ini_set('error_log', rootDir.'error_log/home-error.log');

require_once ('include/config.php');
require_once ('autoloader.php');

Autoloader::register();

// Now you can use your classes without manual includes


const pageName = "Home";
require_once ('partials/header.php');
//
//use contents\home\bannerSubTitle;
//$bannerSubTitle = new bannerSubTitle($siteName);
?>


    <?php
        require_once ('home/banner.php');
        require_once ('home/calculator.php');
        require_once ('home/investment.php');
        require_once ('home/under-investment-modal.php');
        require_once ('home/how-it-work.php');
        require_once ('home/about-us.php');
        require_once ('home/why-choose-us.php');
        require_once ('home/faq.php');
        require_once ('home/top-investor.php');
        require_once ('home/recent-blog.php');
        require_once ('home/testimonier.php');
        require_once ('home/recent-blog.php');
        require_once ('home/newsletter.php');
        require_once ('home/profit-calculator-modal.php');


    ?>

<?php require_once ('partials/footer.php');