<?php
session_start();

if (isset($_GET['length'])) {
    $length = intval($_GET['length']);
    if ($length < 5 || $length > 50) {
        header("Location: index.php");
        exit();
    }

    function getRandomString($n)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $n; $i++) {
            $index = random_int(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        return $randomString;
    }

    $_SESSION['password'] = getRandomString($length);
    header("Location: result.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
