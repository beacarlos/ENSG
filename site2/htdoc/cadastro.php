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
                $telefone = addslashes($_POST['Telefone']);
                $escolaridade = addslashes($_POST['escolaridade']);
  
                try {


                    $db = new conexao();
                    $sql = $db->query(" SELECT * FROM usuarios WHERE email = '$email'  ");
                    //nesse trecho ele verifica se existe email no banco
       
        
                      if($db->contador() == 'vazio'  ){
                         $db = new conexao();
                         $sql = $db->query("INSERT INTO usuarios(nome,nome_social,email, senha, escolaridade, data_nacimento, endereco, telefone) VALUES ('$nome','$nome_social','$email','$senha', '$escolaridade', '$data_nacimento','$endereco','$telefone')");
                
                            header("Location: ../index.html");
                            //utilizando esse método ele checa o numero de respostas dada pelo sql  se não existe igual ele recebe para seu retorno a string vazio e assim pode adicionar o novo parametro; 

                     }
        
                      else{
                          header("Location: ../login.html");
                         echo "Parametro Existente";
                    }
          

                } 
      
            catch (Exception $e) {
                 echo 'Erro'.$e.getMessage();
             }

        }



            
                
    ?>