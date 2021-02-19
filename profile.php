<?php 
namespace app;
require_once "./Session.php" ;
use Session;

$session = new Session\Session();

$session->set("profileUpdated",true, 2);