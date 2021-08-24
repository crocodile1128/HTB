<?php
require_once ('vender/firebase/php-jwt/src/JWT.php');
use \Firebase\JWT\JWT;
function validate(){
    $ret = false;
    $jwt = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7InVzZXJuYW1lIjoicGF1bCJ9fQ.8mnAIdiN0EPVFD1lmIdjrOKz0ikS13Pu0dHdpHmcu_c';

    $secret_key = '6cb9c1a2786a483ca5e44571dcc5f3bfa298593a6376ad92185c3258acd5591e';
    $ret = JWT::decode($jwt, $secret_key, array('HS256'));   
    return $ret;
}

echo validate();