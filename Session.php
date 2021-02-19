<?php
namespace Session;

class Session {
    function __construct() {
        if(session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    function set(string $key, $value,  $isFlash = false):bool {
        $_SESSION[$key]["data"] = $value;
        if($isFlash) {
            $_SESSION[$key]["isFlash"]  = $isFlash;
        }
        return true;
    }
    function get(string $key) {
        if(isset($_SESSION[$key]["data"])) {
            return $_SESSION[$key]["data"];   
        }
        else {
            return false;
        }
    }
    /**
     * 
     */
    function flash(string $key){
        if(isset($_SESSION[$key]) && $_SESSION[$key]["isFlash"] >= 0) {
            $session = $_SESSION[$key];
            --$_SESSION[$key]["isFlash"];
            if($_SESSION[$key]["isFlash"]<=0)
                unset($_SESSION[$key]);
            return  $session["data"];
        }

        return false;
    }

    function  forget(string $key) {
        unset($_SESSION[$key]);
    }

    function flush():bool {
        session_destroy();
        return true;
    }
}
