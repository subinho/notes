<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

if (! Validator::string($_POST['body'], 1, 128)) {
    $errors['body'] = 'A body of no more than 128 characters is required.';
}

if(! empty($errors)) {
    view("create.view.php", [
        'errors' => $errors
    ]);
}


$db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
    ':body' => $_POST['body'],
    ':user_id' => $_SESSION['user']['id']
]);

header('location: /');
die();


