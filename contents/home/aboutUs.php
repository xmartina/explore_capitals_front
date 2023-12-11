<?php

namespace contents\home;

class aboutUs extends homeBase
{
    public function __construct(){
        $p = $this;
        $p->ah = '
            About Us - ' .$p->siteName. '
            ';

        $p->ac =  '
            Welcome to ' .$p->siteName.', your trusted partner in the world of smart investments. At '.$p->siteName.', we understand the significance of financial growth and the importance of a reliable platform to achieve your investment goals.
            ';
    }
}