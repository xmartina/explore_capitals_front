<?php
namespace contents\home;
class howItWork
{
    public function __construct(){
        $p = $this;

        $p->h1 = '
            <li class="pb-2">Visit our platform and click on the "Sign Up" button.</li>
            <li class="pb-2">Fill in the required information to create your account securely.</li>
            <li>Verify your account through the provided confirmation method.</li>
            ';
        $p->h2 = '
            <li class="pb-2">Explore our investment plans to find the one that suits your financial goals.</li>
            <li class="pb-2">Each plan offers different features and profit margins, allowing you to tailor your investment strategy.</li>
            ';

        $p->h3 = '
            <li class="pb-2">As your investments grow, you will start earning profits based on the chosen plan.</li>
            <li class="pb-2">Withdraw your profits or reinvest them to maximize your financial gains.</li>
            ';
    }
}