<?php

    require './vendor/autoload.php';
    $google_client = new Google_Client();
    $google_client->setClientId('564008551440-b39d3gk9a5vl2j6er48fc6npi2pe7lak.apps.googleusercontent.com');
    $google_client->setClientSecret('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');
    $google_client->setRedirectUri('http://localhost:8080/google_redirect.php');
    $google_client = new Google_Oauth2Service($gClient);

    var_dump($_SESSION);