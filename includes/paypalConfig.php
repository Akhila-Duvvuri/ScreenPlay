<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'ASciJkN92O03STRlTkTgHGqJuCKOV8rpPlcfN4FEvQMZNokC_QUN1bg9WzIwUI2WhI719iHjpwbIegF4',     // ClientID
        'EHJitRSXS17Eqr6nt3jI1A96CR2UqEn9UTtwSG7G3Jr_xnSx8dcxMVUfPgp3MXqIy6o1mCvsCDb1c4pg'      // ClientSecret
    )
);
?>