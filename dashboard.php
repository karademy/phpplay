<?php
namespace app;
require 'vendor/autoload.php';
require_once "./Session.php" ;
use Carbon\Carbon;
use Session;

$session = new Session\Session();

if($session->get("user")) {
    $user = $session->get("user");
    echo "Welcome".$user["username"];   
}


if($error = $session->flash("error")) {
    var_dump($error); 
}

if($error = $session->flash("profileUpdated")) {
    echo "Profile Updated";
}
