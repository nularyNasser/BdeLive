<?php

    $page = $_GET['page'] ?? 'home';

    switch ($page) {
        case 'home':
            require_once __DIR__ . '/include/include.inc.php';
            require_once __DIR__ . '/modules/controllers/HomePageController.php';
            $controller = new HomePageController();
            $controller->index();
            break;
        case 'register':
            require_once __DIR__ . '/include/include.inc.php';
            require_once __DIR__ . '/modules/controllers/RegisterController.php';
            $controller = new RegisterController();
            $controller->index();
            break;
        case 'login':
            require_once __DIR__ . '/include/include.inc.php';
            require_once __DIR__ . '/modules/controllers/LoginController.php';
            $controller = new LoginController();
            $controller -> index();
            break;
        case 'forgotPassword':
            require_once __DIR__ . '/include/include.inc.php';
            require_once __DIR__ . '/modules/controllers/ForgotPasswordController.php';
            $controller = new ForgotPasswordController();
            $controller->index();
            break;
    }
?>
