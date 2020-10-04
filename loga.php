<?php

if (isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['senha'])&& !empty($_POST['senha'])){

require "UserClass.php";


$user = new UserClass();


$nome = addslashes( $_POST ['nome']);
$senha = addslashes( $_POST ['senha']);

$retorno = $user->logar($nome,$senha);

echo ($retorno)? "<h1>Login feita com sucesso</h1>": "<h1>Sem sucesso</h1>";
}
else{
    echo "falha";
    //header("index.php");
}
?>

