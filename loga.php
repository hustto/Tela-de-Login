<?php

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha'])&& !empty($_POST['senha'])){

require "UserClass.php";


$user = new UserClass();


$email = addslashes( $_POST ['email']);
$senha = addslashes( $_POST ['senha']);

$retorno = $user->logar($email,$senha);

echo ($retorno)? "<h1>Login feita com sucesso</h1>": "h1>Login feita sem sucesso</h1>";
}
else{
    echo "falha";
    //header("index.php");
}
?>

