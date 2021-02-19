<?php
namespace app;
require 'vendor/autoload.php';
require_once "./Session.php" ;
use Carbon\Carbon;
use Session;

//printf("Now: %s", Carbon::now());


$session = new Session\Session();
$session->set("user",["username"=>"Seyed","login_timestap"=> Carbon::now()]);



