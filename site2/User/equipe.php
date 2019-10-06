<!DOCTYPE html>

  <html>

    <head>    
      <?php
        session_start();
        
        if(isset($_SESSION['id']) == null || 0   ){

            header("location: ../index.html");
            
        }
        
            require_once "../htdoc/crud.php";

            $crud = new Usuario($_SESSION['id']);
   

            $nomeUser = $crud->GetNome();
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

      <form method="POST" action="../htdoc/equipec.php" >
        <fieldset>
          <legend>Cadastro da Equipe</legend>
          <p style="color: red;">OBS:preencha so se for participar das competicoes olhe os editais no site antes de cadastra</p>

          <div class="form-group">
                                    <label for="nome">Nome da equipe</label><br>
                                    <input name="nome_de_equipe" class="form-control" placeholder="Team Name" type="text" id="nome_de_equipe">
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <label for="capitao">Capitão</label><br> 
                                    <input name="capitao" class="form-control" placeholder="<?php echo $nomeUser;?>" type="text" id="capitao" disabled=""> 
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <label for="cpf">CPF</label> <br>
                                    <input name="cpf" class="form-control" placeholder="CPF" type="text" id="cpf">
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <label for="senha">Senha</label> <br>
                                    <input name="senha" class="form-control" placeholder="********" type="password" minlength="8" id="senha">
                                </div> <!-- form-group// -->    
                                <div class="form-group">
                                    <label for="escolaridade">Modalidade</label><br>
                                    <select name="modalidade" id="modalidade">
                                        <option value="1">Cs</option>
                                        <option value="2">Lol</option>
                                        <option value="3">cosplay</option>
                                        <option value="4">k-pop</option>
                                        <option value="5">clash</option>
                                    </select>
                                </div> <!-- form-group// -->                            
                                
                              <button type="submit" class="btn btn-outline-dark">Cadastra equipe</button>       
                                                  

                                            
                                                                                             
        </fieldset>
                                          
      </form>

      
  

      <form method="POST"  >
        <fieldset>
          <legend>Cadastro de membros</legend>
          <select>
            <div style="border: solid 7px gray; color: black; height: auto;width: auto;">
              <h3>Cadastrados</h3>
              <p>sei la</p>
              
            </div>
            <option>modelo para seleçao dos uss</option>
          </select>
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="modeloAly">Cadastrar menbros da equipe</button>
    </div>
  </div> 
  </fieldset>
                                
                                                  

                                            
                                                                                             
        </fieldset>
                                          
      </form>


      <form method="POST">
        <fieldset>
          <legend>Remover Membros</legend>
          <select>
            <option>modelo para seleçao dos uss</option>
          </select>
      <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="modeloAly">Remover da equipe</button>
    </div>
  </div>  
  </fieldset>
                               
                                                  

                                            
                                                                                             
                                          
      </form>
 


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>

  </html>