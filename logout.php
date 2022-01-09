<?php  

// Si on veut supprimer un cookie, on lui affecte une valeur time négative
setcookie('CURRENT_USER', null, time() - 3600, '/', '', true, true);
unset($_COOKIE['CURRENT_USER']);

// Une redirection vers la page d'accueil
header('Location: ./');

?>