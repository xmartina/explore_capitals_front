<?php

error_reporting(E_ALL);
ini_set('log_errors', 1);

const siteName = "Explore Capitals";
const siteEmail = "contact@explorecapitals.online";
const sitePhone ="+1 (234) 456 7890";
const siteTag = "Best investment Option";
const rootDir = "/home/multistream6/domains/explorecapitals.online/public_html/";
require_once (rootDir.'include/support-plugin.php');


$host = 'localhost'; // e.g., 'localhost'
$dbname = 'multistream6_explore_capitals';
$username = 'multistream6_explore_capitals';
$password = '000000';

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



