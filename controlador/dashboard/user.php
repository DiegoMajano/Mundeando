<?php
include_once './modelo/db.php';

class User extends DB{
    private $nombre;
    private $username;
    public $rol;

    public function userExists($user, $pass){

        $query = $this->conexion()->prepare('SELECT * FROM usuario WHERE User = :user AND Contraseña = :pass');
        $query->execute(['user'=>$user,'pass'=>$pass]);

        if($query->rowCount()) {
            return true;
        }else {
            return false;
        }
    }
    public function setUser($user){
        $query = $this->conexion()->prepare('SELECT * FROM usuario u INNER JOIN rol r where u.User = :user and u.Id_Rol = r.IdRol');
        $query->execute(['user'=>$user]);

        if ($query->rowCount() > 0) {
            foreach ($query as $currentUser) {
                $this->nombre = $currentUser['NombreCompleto'];
                $this->username = $currentUser['User'];
                $this->rol = $currentUser['NombreRol'];
            }
        } else {
            $this->nombre = 'no existe';
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
    
    public function getRol(){
        return $this->rol;
    }
}

?>