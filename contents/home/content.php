<?php
    class homeContent{


        public function howItWorkC1(){
            echo '
            <li class="pb-2">Visit our platform and click on the "Sign Up" button.</li>
            <li class="pb-2">Fill in the required information to create your account securely.</li>
            <li>Verify your account through the provided confirmation method.</li>
            ';
        }
        public function howItWorkC2(){
            echo '
            <li class="pb-2">Explore our investment plans to find the one that suits your financial goals.</li>
            <li class="pb-2">Each plan offers different features and profit margins, allowing you to tailor your investment strategy.</li>
            ';
        }
        public function howItWorkC3(){
            echo '
            <li class="pb-2">As your investments grow, you will start earning profits based on the chosen plan.</li>
            <li class="pb-2">Withdraw your profits or reinvest them to maximize your financial gains.</li>
            ';
        }

        public function aboutUsH($siteName){
            echo '
            About Us - ' .$siteName. '
            ';
        }
        public function aboutUsC($siteName){
            echo '
            Welcome to ' .$siteName.', your trusted partner in the world of smart investments. At '.$siteName.', we understand the significance of financial growth and the importance of a reliable platform to achieve your investment goals.
            ';
        }

        public function whyChooseUs(){

        }
    }