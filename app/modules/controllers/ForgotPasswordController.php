<?php
class ForgotPasswordController {

    public function index() {
        $this->loadView('forgotPasswordPageView');
    }

    private function loadView($viewName) {
        require_once __DIR__ . '/../views/' . $viewName . '.php';
    }
}
?>
