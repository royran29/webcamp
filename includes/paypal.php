<?php

//definir constante global
define('URL_SITIO', 'http://localhost/webcamp/');

require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'ASy5O75scl5j6iyh1QnOKsb-zLcRClRrUqlYMXTyb7uEeYlbl2HVty08-OFqrtfvC6vGb2Hs2qtpciTh',//ClientID
        'EFRP7T3svkDCbLtCNwgH65NkYtiYGr7SN6V5ZW5ctzS7_w8xKmOwK_-U-tZiYYky4AWpD4HwgL08E_-o'//Secret
    )
);