<?php
require_once __DIR__.'/server.php';

//$_POST['grant_type']=$_GET['grant_type'];
//$_POST['code']=$_GET['code'];
//$_POST['redirect_uri']=$_GET['redirect_uri'];
//$_POST['client_id']=$_GET['client_id'];
//$_POST['client_secret']=$_GET['client_secret'];
#error_log($_POST['grant_type']);
#error_log($_POST['client_id']);
#error_log($_POST['client_secret']);
#error_log($_POST['code']);
#error_log($_POST['redirect_uri']);

// Handle a request for an OAuth2.0 Access Token and send the response to the client
//$server = new OAuth2\Server($storage);
//$server->addGrantType(new OAuth2\GrantType\AuthorizationCode($storage));
//$server->handleTokenRequest(OAuth2\Request::createFromGlobals(), new OAuth2\Response())->send();
$server->handleTokenRequest(OAuth2\Request::createFromGlobals())->send();
?>
