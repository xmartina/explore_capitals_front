<?php require_once ('../include/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="TfF30Aiq6Xru76A471los5uWsgMzrzPlIyCgXOG2">

    <link rel="shortcut icon" type="image/png" href="/asset/front/img/favicon.png">

    <title>
        Home | <?= siteName | siteTag ?>
    </title>
    <link rel="stylesheet" href="/asset/theme1/frontend/css/cookie.css">
    <link href="/asset/common/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/asset/common/css/animate.min.css">
    <link rel="stylesheet" href="/asset/common/css/slick.css">
    <link rel="stylesheet" href="/asset/common/css/font-awsome.min.css">
    <link rel="stylesheet" href="/asset/common/css/iziToast.min.css">
    <link href="/asset/theme1/frontend/css/style.css" rel="stylesheet">

    <style>
        .tradingview-widget-container {
            height: 46px !important;
        }

        .tradingview-widget-copyright {
            display: none;
        }
    </style>

    <style>
        #profit-table tr td {
            color: #fff;
        }
    </style>


    <link rel="stylesheet" href="/asset/theme1/frontend/css/color.php?primary_color=d77600">
</head>


<body>

<div id="preloader"></div>

<div class="js-cookie-consent cookie-consent cookie-modal">

    <div class="cookies-card__icon">
        <i class="fas fa-cookie-bite"></i>
    </div>

    <span class="cookie-consent__message">
        Accept cookie for this site
    </span>

    <button class="js-cookie-consent-agree cookie-consent__agree btn">
        Accept cookie
    </button>


</div>


<script>
    'use strict'

    window.laravelCookieConsent = (function () {

        const COOKIE_VALUE = 1;
        const COOKIE_DOMAIN = 'hyipmax.springsoftit.com';

        function consentWithCookies() {
            setCookie('laravel_cookie_consent', COOKIE_VALUE, 7300);
            hideCookieDialog();
        }

        function cookieExists(name) {
            return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
        }

        function hideCookieDialog() {
            const dialogs = document.getElementsByClassName('js-cookie-consent');

            for (let i = 0; i < dialogs.length; ++i) {
                dialogs[i].style.display = 'none';
            }
        }

        function setCookie(name, value, expirationInDays) {
            const date = new Date();
            date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
            document.cookie = name + '=' + value
                + ';expires=' + date.toUTCString()
                + ';domain=' + COOKIE_DOMAIN
                + ';path=/'
                + '';
        }

        if (cookieExists('laravel_cookie_consent')) {
            hideCookieDialog();
        }

        const buttons = document.getElementsByClassName('js-cookie-consent-agree');

        for (let i = 0; i < buttons.length; ++i) {
            buttons[i].addEventListener('click', consentWithCookies);
        }

        return {
            consentWithCookies: consentWithCookies,
            hideCookieDialog: hideCookieDialog
        };
    })();
</script>
<?php require_once ('nav.php'); ?>