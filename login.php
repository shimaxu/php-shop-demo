<?php
try {
    include __DIR__ . '/classes/User.php';
    $user = new User();

    $title = 'Sign in';
    ob_start();
    include __DIR__ . '/views/loginForm.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}
include __DIR__ . '/views/layout.php';