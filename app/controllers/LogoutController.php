<?php

class LogoutController {
    public function show() {
        session_unset();
        session_destroy();
        require_once("../view/home.php");
    }
}
