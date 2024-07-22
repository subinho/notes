<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$currentUserId = $_SESSION['user']['id'] ?? '';

$notes = $db->query('select * from notes where user_id = :id', [
    ':id' => $currentUserId
])->get();

view("index.view.php", [
    'notes' => $notes,
    'user' => $_SESSION['user'] ?? false
]);