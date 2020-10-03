<?php

class cliente {


public function logar($nome, $senha){

    global $pdo;

$sql= "SELECT * FROM usuarios WHERE nome = :nome AND senha = :senha";

$sql = $pdo -> prepare($sql);
$sql ->bindvalue("nome",$nome);
$sql ->bindvalue("passoword", md5($senha));
$sql ->execute();

if ($sql ->rowcout()>0);
$dado = $sql -> fetch();

$dado ['id'];

}



}