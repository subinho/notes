<?php


use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if(! Validator::email($email)) {
    $errors['email'] = "Provide a valid email address.";
}

if(! Validator::string($password, 5, 15)) {
    $errors['password'] = "Password must be between 5 and 15 characters.";
}

if(! empty($errors)) {
    return view("registration/register.view.php", [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [
    ':email' => $email
])->find();


if($user) {
    header('location: /login');
    exit();
} else {
    $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
        ':email' => $email,
        ':password' => password_hash($password, PASSWORD_DEFAULT)
    ]);

    $success    = [
        'registered' => 'Account successfully created.'
    ];
    $_SESSION['success'] = $success;

    header('location: /login');
    exit();
}
