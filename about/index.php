<?php
require_once ('./include/config.php');
require_once ('./autoloader.php');

Autoloader::register();
const pageName = "About Us";
const rootDir = "/home/multistream6/domains/explorecapitals.online/public_html/";
require_once (rootDir.'include/config.php');
require_once (rootDir.'partials/header.php');
require_once (rootDir.'about/breadcrumbs.php');
require_once (rootDir.'about/about-us.php');
require_once (rootDir.'about/faq.php');
require_once (rootDir.'about/testimonier.php');
require_once (rootDir.'about/newslatter.php');
require_once (rootDir.'partials/footer.php');