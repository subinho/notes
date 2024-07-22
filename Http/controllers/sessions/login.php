<?php

use Core\Session;

view('sessions/login.view.php', [
    'errors' => Session::get('errors'),
    'success' => Session::get('success')
]);