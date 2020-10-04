<?php
require 'Conect.php';
class UserClass extends Conect {

    function __construct(){
        parent::__construct();
    }

    public function logar($nome, $senha){

        $sql= "SELECT * FROM usuarios WHERE nome = :nome AND senha = :senha";

        $sql = $this->pdo -> prepare($sql);
        $sql ->bindvalue("nome",$nome);
        $sql ->bindvalue("senha", md5($senha));
        $sql ->execute();

        if ($sql->rowCount()==0){
            return false;
        }

        return true;

    }



}
