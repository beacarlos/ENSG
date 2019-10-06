<?php
session_start();

require_once "crud.php";
require_once "conexão.php";

$conexao = new conexao();
$crud = new usuario($_SESSION['id']);


    $email = $_SESSION['email'];
    

    $sql = $conexao->query(" SELECT * FROM backup WHERE email = '$email'  ");
 //nesse trecho ele verifica se existe email no banco
       
        
        if($conexao->contador() == 'vazio' || $conexao->contador() == 0 ){
    
                $crud->backup();
                //header("Location: logoff.php");
                 header("Location: logoff.php");

        //utilizando esse método ele checa o numero de respostas dada pelo sql  se não existe igual ele recebe para seu retorno a string vazio e assim pode adicionar o novo parametro; 

        }
        
         else{
            
            $crud->delete();
            header("Location: logoff.php");
            
        }

    


?>