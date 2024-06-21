<?php

include('abstract/payment.abstract.php');
include('classes/buyproduct.class.php');


$buyProduct = new BuyProduct();
echo $buyProduct-> getPayment();




?>