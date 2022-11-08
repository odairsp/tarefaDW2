<?php

class Session {

    public function __construct() {
        //_DISABLED = 0; _NONE = 1; _ACTIVE = 2
        if (session_status() != 2) {
            session_start();
        }
    }

    public function setSession(string $index, $value) {
        if (!empty($index)) {
            $_SESSION[$index] = $value;
        }
    }
    
    public function getSession($index) {
        return empty($_SESSION[$index])?'':$_SESSION[$index];
    }

    public function destroy() {
        session_destroy();
    }

}
