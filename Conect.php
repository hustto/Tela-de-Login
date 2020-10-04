
<?php 

class Conect {

protected $localhost ="localhost";
protected $user ="root";
protected $senha ="";
protected $dbname ="login";

protected $pdo = null;
protected $erro = null;

    function __construct(){
        try{
            $this->pdo = new PDO("mysql:dbname=".$this->dbname.";host=".$this->localhost, $this->user, $this->senha);

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        catch(PDOException $e){
            $this->erro = "Erro :" . $e-> getMessage();
            exit;
        }
        
    }

}
