
<?php 

$localhost ="localhost";
$user ="root";
$senha ="";
$dbname ="login";

global $pdo;



try{


    $pdo = new PDO("mysql:dbname=".$dbname.";host=".$localhost, $user, $senha);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = $pdo->query("SELECT * FROM usuarios");
    $sql -> execute();
    echo "Numeros de Usuarios <br>" . $sql -> rowCount();


}

catch(PDOException $e){
    echo "Erro :" . $e-> getMessage();
    exit;




}

?>
