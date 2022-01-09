<?php

$login = $_POST['login'];
$password = $_POST['password'];

$users = [
    [
        'firstname' => 'Mickaël',
        'lastname'  => 'Lambert',
        'email'     => 'mickael.lambert2@gmail.com',
        'password'  => 'coucou',
    ],
    [
        'firstname' => 'Eglantine',
        'lastname'  => 'Rollin',
        'email'     => 'eglantine.rollin@gmail.com',
        'password'  => 'coucou2',
    ]
];  

if (isset($login) && isset($password)) {
    foreach ($users as $user) {
        if ($user['email'] == $login && $user['password'] == $password) {
            $_SESSION['current_user'] = $user;
            break;
        }
    }
}

header('Location: index.php');

?>