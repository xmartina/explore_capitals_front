<?php
namespace contents\home;

class bannerSubTitle extends homeBase
{
    public function __construct(){
        $siteName = $this->siteName;
        $this->output = "Unlocking Financial Potential: Your Gateway to Smart Investments with " .$siteName;
    }
}