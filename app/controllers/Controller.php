<?php
class Controller {
    protected $viewPath = "";

    function __construct($viewPath) {
        $this->viewPath = $viewPath;
    }

    public function show() {
        require_once($this->viewPath);
    }
}