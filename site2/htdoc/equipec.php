 <?php
 session_start();
  
  require_once "../htdoc/conexão.php";
  require_once "../htdoc/crud.php";
  $crud = new usuario($_SESSION['id']);
 

  $con = new conexao();

  if(isset($_POST['cpf'])){
       $consulta = $crud->validaCPF($_POST['cpf']);

    
    if($consulta == true){
      if (isset($_POST['nome_de_equipe']) && empty($_POST['nome_de_equipe']) == false) 
        if (isset($_POST['senha']) && empty($_POST['senha']) == false) 
            if(isset($_POST['cpf']) && empty($_POST['cpf']) == false){
                $sql = $con->query("SELECT * FROM equipe where id_capitao = ".$_SESSION['id']."");

                if($con->contador() < 1 ){

                  $nome_de_equipe = addslashes($_POST['nome_de_equipe']);
                  $senha = md5(addslashes($_POST['senha']));
                  $cpf  = addslashes($_POST['cpf']);
                  $modalidade = $_POST['modalidade'];
                  $id = $_SESSION['id'];
                 
                  $sql = $con->query2("  INSERT INTO equipe(nome_da_equipe,id_capitao,cpf, id_modalidade) VALUES ('$nome_de_equipe','$id','$cpf','$modalidade')");
                    
                
                        header("location: ../User/equipe.php");
                
              }   

              else{
                echo "dado existente!";
                header("location: ../User/equipe.php");
              }     
           }
        }
        else{ 
          return false;
          header("location: ../User/equipe.php");


          }
  }
    else{

      return false;
      header("location: ../User/equipe.php");

    }

 

?>
