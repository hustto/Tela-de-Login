<?php

if (isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['senha'])&& !empty($_POST['senha'])){

require 'conect.php';
require "userclass.php";

$u = new loga();


$nome = addslashes( $_POST ['nome']);
$senha = addslashes( $_POST ['senha']);

$u ->logar($nome, $senha);

}
else{

    header("index.php");
}
?>

<h1>Primeira pagina de login feita com sucesso</h1>