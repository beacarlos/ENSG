<!DOCTYPE html>

  <html>

    <head>    
      <?php
        session_start();
        
        if(isset($_SESSION['id']) == null || 0   ){

            header("location: ../index.html");
            
        }

       
        include ("../htdoc/crud.php");


        $db = new Usuario($_SESSION['id']);
        $nome = $db->GetNome();
        $nome_social = $db->GetNome_Social();
        $endereco = $db->GetEndereco();
        $medio = $db->GetEscolaridade();
        $telefone = $db->GetTelefone();
        $data_nacimento = $db->GetData();
        $email = $db->GetEmail();
             echo $_SESSION['id'];

       



      ?>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="meuestilo.css">

    </head>

    <body>


      <header>
        <img width="300px;" height="135px"  alt="logo" src="../images/acon.png">
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <img src="../images/ACON(1).png" width="150px" height="150px" style="border-radius: 100px; border: solid 1px gray;" >
          <a href="main.php">Inicio</a>
          <a href="perfil.php">Conta</a>
          <a href="Equipe.php">Equipe</a>
          <a href="cronograma.php">Cronograma</a>
          <a href="../htdoc/logoff.php">Sair</a>
        </div>
        <div id="main">
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
        <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
          }

          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            document.body.style.backgroundColor = "white";
          }
        </script>

      </header>



<div class="parallax"></div>





  <form method="POST">
        <fieldset>
          <legend>Dados Cadastrais</legend>

          <div class="form-group">
                                    <label for="nome">Nome Completo:</label><br>
                                    <input name="nome" class="form-control" placeholder="<?php echo $nome; ?>" type="text" id="nome">
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <label for="nome_social">Nome Social:</label><br> 
                                    <input name="nome_social" class="form-control" placeholder="<?php echo $nome_social; ?>" type="text" id="nome_social">
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <label for="email">E-mail:</label> <br>
                                    <input name="email" class="form-control" placeholder="<?php echo $email; ?>" type="email" id="email" disabled="">
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <label for="senha">Senha:</label> <br>
                                    <input name="senha" class="form-control" placeholder="********" type="password" minlength="8" id="senha">
                                </div> <!-- form-group// -->    
                                <div class="form-group">
                                    <label for="escolaridade"><?php echo $medio ?>:</label><br>
                                    <select name="escolaridade" id="escolaridade">
                                        <option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>
                                        <option value="Ensino Fundamental">Ensino Fundamental</option>
                                        <option value="Ensino Medio Incompleto">Ensino Medio Incompleto</option>
                                        <option value="Ensino Medio">Ensino Medio</option>
                                        <option value="Ensino Técnico Incompleto">Ensino Técnico Incompleto</option>
                                        <option value="Ensino Técnico">Ensino Técnico</option>
                                        <option value="Ensino Superior Incompleto">Ensino Superior Incompleto</option>
                                        <option value="Ensino Superior">Ensino Superior</option>
                                    </select>
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <label for="data_nacimento">Data de Nacimento:</label> <br>
                                    <input name="data_nacimento" class="form-control"  VALUE="<?php echo $data_nacimento;?>" type="date" id="data_nacimento">
                                    <script type="text/javascript">
                                      var datecontrol = document.querySeletector('input[type="data');
                                      datecontrol.value = '<?php echo $data;?>'
                                    </script>
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <label for="endereco">Endereço:</label> <br>
                                    <input name="endereco" class="form-control" placeholder="<?php echo $endereco; ?>" type="text" id="endereco">
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <label for="Telefone">Telefone:</label><br>
                                    <input name="Telefone" class="form-control" placeholder="<?php echo $telefone; ?>" type="tel" minlength="11" maxlength="11"  id="Telefone">
                                </div> <!-- form-group// -->
                            
                                                              
                                
                                            <button type="submit" class="btn btn-outline-dark">Alterar Dados</button>
                                            
                                                

                                            
                                                                                             
        </fieldset>
                                          
      </form>



<form method="POST" style="margin-top: 20px;">
                        <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
  Apagar Conta permanetimente
</button>

<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Tem certeza?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ao apagar a conta não sera possivel recuperar
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
        <a type="button" href="../htdoc/delete.php" class="btn btn-primary">Confirma</a>
      </div>
    </div>
  </div>
</div>





 <?php 
  


        if(isset($_POST['nome']) && empty($_POST['nome']) == false){

         
              $db->Setnome($_POST['nome']);
              $update = $db->salvar();

          }
          //Método Salvar nome;
          if(isset($_POST['nome_social']) && empty($_POST['nome_social']) == false){
         
              $db->SetNome_Social($_POST['nome_social']);
              $update = $db->salvar();

          }
          //Método Salvar nome social;

          if(isset($_POST['senha']) && empty($_POST['senha']) == false){

            $db->SetSenha(md5($_POSt['senha']));
            $db->Salvar();

             
          } 
          //Método Salvar senha;


          if(isset($_POST['escolaridade']) && empty($_POST['escolaridade']) == false){
         
              $db->SetEscolaridade($_POST['escolaridade']);
              $update = $db->salvar();

          } 
          
          //Método para salvar escolaridade

          if(isset($_POST['data_nacimento']) && empty($_POST['data_nacimento']) == false){
         
              $db->SetData($_POST['data_nacimento']);
              $update = $db->salvar();

          } 
          //Método para salvar data


          if(isset($_POST['telefone']) && empty($_POST['telefone']) == false){
         
             $db->SetTelefone($_POST['telefone']);
             $update = $db->salvar();

          }
        //Método para salvar telefone
          if(isset($_POST['endereco']) && empty($_POST['endereco']) == false){

         
              $db->SetEndereco($_POST['endereco']);
              $update = $db->salvar();

          }

        //Método para setar o novo valor e enviar para o crud onde vai ser salvo

          if(isset($_POST['delete']) && empty($_POST['delete']) == false ){
                  header("Location: ../htdoc/delete.php");
          }


         
           

    ?>










      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </html>