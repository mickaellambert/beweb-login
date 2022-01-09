<?php 

// On récupère le login et le mot de passe dans une variable vu qu'on l'utilise plusieurs fois dans le fichier
$login = $_POST['login'];
$password = $_POST['password'];

// Notre tableau d'utilisateurs (ici il est en static, mais l'idée c'est de le récupérer dans notre BDD plus tard)
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

// On vérifie qu'on a bien une valeur dans notre login et notre mot de passe
if (isset($login) && isset($password)) {
    // Si oui, on va boucler sur notre liste d'utilisateurs afin de vérifier si les informations saisies correspondent à un de ceux ci. 
    foreach ($users as $user) {
        if ($user['email'] == $login && $user['password'] == $password) {
            // Si on le trouve, on va donc définir le cookie CURRENT_USER à l'email correspondant de notre utilisateur
            setcookie('CURRENT_USER', $user['email'], time() + 3600*24, '/', '', true, true);
            break;
        }
    }
}

// On effectue une redirection vers l'index à la fin de l'execution de notre script
header('Location: ./');

?>