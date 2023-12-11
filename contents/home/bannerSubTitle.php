<?php
namespace contents\home;
use contents\base;

class bannerSubTitle extends base
{
    public function __construct(){
        $siteName = $this->siteName;
        $this->output = "Unlocking Financial Potential: Your Gateway to Smart Investments with " .$siteName;
    }
}