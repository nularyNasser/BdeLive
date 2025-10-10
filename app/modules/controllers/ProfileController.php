<?php
    require_once __DIR__ . '/../models/UserManager.php';
    class ProfileController {
        public function __construct() {
            $this -> loadView('profilePageView');
        }

        public function deleteAccount() {
            $userId = $_SESSION['utilisateur_id'];
            $user = new UserManager();

            $user -> deleteUser($userId);

            $_SESSION = [];
            session_destroy();

            header('Location: index.php?page=home');
            exit;
        }

        private function loadView($viewName) {
            require_once __DIR__ . '/../views/' . $viewName . '.php';
        }
    }