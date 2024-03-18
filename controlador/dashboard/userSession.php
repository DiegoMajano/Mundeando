<?php

class UserSession{
    // iniciar la sesion
    public function __construct(){
        session_start();
    }

    //asignar a variable user de la session el user asginado
    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }
    // retornar el user de la sesion iniciada
    public function getCurrentUser(){
        return $_SESSION['user'];
    }
    //cierra la session y toda instancia creada de la misma
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>