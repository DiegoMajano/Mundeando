<?php
include_once 'controlador/dashboard/user.php';
include_once 'controlador/dashboard/userSession.php';

$userSession = new UserSession();
$user = new User();

if (isset ($_SESSION['user'])) {

  $user->setUser($userSession->getCurrentUser());
  include_once './views/dashboard/index.php';

} else if (isset ($_POST['username']) && isset ($_POST['password'])) {

  $userForm = $_POST['username'];
  $passForm = $_POST['password'];


  if ($user->userExists($userForm, $passForm)) {

    $userSession->setCurrentUser($userForm);
    $user->setUser($userForm);
    include ('./views/dashboard/index.php');
  } else {
    $errorLogin = 'nombre usuario y/o contraseña no validos';
    include_once './views/public/login.php';
  }
} else {
  include_once './views/public/login.php';
}
?>