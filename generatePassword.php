<?php
session_start();

if (isset($_GET['length'])) {
    $length = $_GET['length'];

    // Logica per generare la password
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($characters) - 1);
        $password .= $characters[$randomIndex];
    }

    $_SESSION['generatedPassword'] = $password;
    header("Location: index.php");
    exit();
}
?>
