<?php
session_start();
require_once "conexão.php";
    if (isset($_POST['email']) && empty($_POST['email']) == false) 
        if (isset($_POST['senha']) && empty($_POST['senha']) == false) 
            if(isset($_POST['nome']) && empty($_POST['nome']) == false){

                $email = addslashes($_POST['email']);
                $senha = md5(addslashes($_POST['senha']));
                $nome  = addslashes($_POST['nome']);
                $nome_social = addslashes($_POST['nome_social']);
                $endereco = addslashes($_POST['endereco']);
                $data_nacimento = addslashes($_POST['data_nacimento']);
                $telefone = addslashes($_POST['telefone']);
        
    

                try {


                    $db = new conexao();
                    $sql = $db->query(" SELECT * FROM usuarios WHERE email = '$email'  ");
                    //nesse trecho ele verifica se existe email no banco
       
        
                      if($db->contador() == 'vazio' || $db->contador == 0 ){
                         $db = new conexao();
                         $sql = $db->query("INSERT INTO usuarios(email,senha,nome,nome_social, escolaridade, data_nacimento, endereco, telefone) VALUES ('$email', '$senha', '$nome','$nome_social', '$escolaridade', '$data_nacimento','$endereco','$telefone')");
                
                            header("Location: ../login.html");
                            //utilizando esse método ele checa o numero de respostas dada pelo sql  se não existe igual ele recebe para seu retorno a string vazio e assim pode adicionar o novo parametro; 

                     }
        
                      else{
            
                         echo "Parametro Existente";
                    }
          

                } 
      
            catch (PDOException $e) {
                 echo 'Erro'.$e.getMessage();
             }

        }



            
                
    ?>