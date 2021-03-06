<?php
/*
  ./app/routeurs/users.php
  ROUTES DES USERS
    $_GET['users']
 */

include_once '../app/controleurs/usersControleur.php';

switch ($_GET['users']) {
  case 'loginForm':
    // FOMULAIRE DE CONNEXION AU BACKOFFICE
    // PATTERN: ?users=login
    // CTRL: usersControleur
    // ACTION: loginForm
    \App\Controleurs\UsersControleur\loginFormAction();
    break;

  case 'loginCheck':
    // FOMULAIRE DE CONNEXION AU BACKOFFICE
    // PATTERN: ?users=login
    // CTRL: usersControleur
    // ACTION: loginForm
    \App\Controleurs\UsersControleur\loginCheckAction($connexion);
    break;

  default:
    // Je charge un 404
    break;
}
