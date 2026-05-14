<?php 

require_once __DIR__ . '/../../config/database.php';

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

$errors = [];


// var_dump($email, $password);

if(empty($email)){
    $errors[] = 'Email is required';
}

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors[] = 'Invalid email';
}

if(empty($password)){
    $errors[] = 'Password is required';
}


if(!empty($errors)){
    $_SESSION['errors'] = $errors;

    header('Location: /login');

    exit;
}

var_dump($email, $password);