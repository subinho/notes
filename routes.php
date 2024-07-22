<?php

$router->get('/', 'index.php');
$router->delete('/', 'destroy.php');

$router->get('/create', 'create.php')->only('auth');
$router->post('/', 'store.php');

$router->get('/register', 'registration/register.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/login', 'sessions/login.php')->only('guest');
$router->post('/login', 'sessions/store.php')->only('guest');
$router->delete('/logout', 'sessions/logout.php')->only('auth');