<!DOCTYPE html>
<html lang="en">
<head>

<?php

        require_once "htdoc/conexão.php";

        $con = new conexao();

        $query = $con->query("SELECT * FROM usuarios ");
        $retorno = $con->contadorAll();
        $cont = count($retorno);
        echo $cont;
       






?>

        <link rel="icon" href="images/icone.ico" type="image/x-icon" />
    <title>ACON - Entre Mundos!</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            e-MAIL: <a href="#">acon.ifce@gmail.com</a>
                        </div><!-- .header-bar-email -->

                        <div class="header-bar-text">
                            <p>Contato: <span>+55 (85) 98844-4394 </span></p>
                        </div><!-- .header-bar-text -->
                    </div><!-- .col -->


                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                       <div class="donate-btn">
                            <!-- Button trigger modal -->
                                <button type="button" class="modeloAly" data-toggle="modal" data-target="#exampleModalCenter">
                                  Login
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                      <!--Formulario começa aqui-->
                                        <form class="px-4 py-3" method="POST" action="htdoc/login.php"?">
                                            <div class="form-group">
                                              <h4 class="label1"> Endereço de Email</h4>
                                              <input name="email" type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" required="" autofocus>
                                            </div>
                                            <div class="form-group">
                                              <h4 class="label1">Senha</h4>
                                              <input name="senha" type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" required="">
                                            </div>
                                            <div class="form-group">
                                              <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                <p class="label1">Lembre-se de mim</p>
                                              </div>
                                            </div>
                                            <button type="submit" class="btn btn-primar">Iniciar sessão</button>
                                          </form>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="inscricao.html">Novo por aqui? Inscreva-se</a>
                                          <a class="dropdown-item" href="#">Esqueceu a senha?</a>
                                        <!--termina aqui-->
                                      </div>
                                    </div>
                                  </div>
                                </div>


                                <!-- Button trigger modal -->
                                <button type="button" class="modeloAly" data-toggle="modal" data-target="#exampleModalCenter2">
                                  Inscrição
                                </button>
                                 <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Inscreva-se</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                      <!--Formulario começa aqui-->
                                        <form class="px-4 py-3" method="POST" action="htdoc/cadastro.php"?">
                                            <div class="form-group">
                                                <h4 class="label1">Nome</h4>
                                                <input name="nome" class="form-control" placeholder="Nome Completo" type="text" required autofocus>
                                            </div> <!-- form-group// -->
                                            <div class="form-group">
                                              <h4 class="label1"> Endereço de Email</h4>
                                              <input name="email" type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" required="">
                                            </div>
                                            <div class="form-group">
                                              <h4 class="label1">Senha</h4>
                                              <input name="senha" type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" required="">
                                            </div>
                                            <div class="form-group">
                                                <h4 class="label1">Escolaridade</h4>
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
                                                <h4 class="label1">Data de Nacimento</h4>
                                                <input name="data_nacimento" class="form-control" placeholder="Data de nacimento" type="date">
                                            </div> <!-- form-group// -->
                                            <div class="form-group">
                                                <h4 class="label1">Endereço</h4>
                                                <input name="endereco" class="form-control" placeholder="Endereço" type="text" required >
                                            </div> <!-- form-group// -->
                                            <div class="form-group">
                                                <h4 class="label1">Telefone</h4>
                                                <input name="Telefone" class="form-control" placeholder="85999999999" type="tel" minlength="11" maxlength="11" required >
                                            </div> <!-- form-group// -->
                                            <div class="form-group">
                                              <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                <p class="label1">Lembre-se de mim</p>
                                              </div>
                                            </div>
                                            <button type="submit" class="btn btn-primar">Inscreva-se</button>
                                            <button type="reset" class="btn btn-primar">Limpar</button>
                                          </form>
                                          
                                        <!--termina aqui-->
                                      </div>
                                    </div>
                                  </div>
                                </div>

                            
                        </div><!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.html" rel="home"><img class="d-block" src="images/acon.png"  width="180px" height="80px" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li class="current-menu-item"><a href="painel.html">Início</a></li>
                                <li><a href="#">minha conta</a></li>
                                <li><a href="#">favorito</a></li>
                                <li><a href="#">Cadastro de equipe</a></li>
                                <li><a href="#">Compra de ingressos</a>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->

    <!-- =================== Corpo aqui =========================== -->
    <style type="text/css">
      .tw-heart-box {
        position: relative;
        width: 100px;
        height: 100px;
        display: inline-block;
      }

      .tw-heart {
        background: url(http://i.imgur.com/zw8ahUb.png) no-repeat 0 0;
        display: inline-block;
        width: inherit;
        height: inherit;
        position: absolute;
        left: 0;
        top: 0;
      }

      [type="checkbox"]:checked + .tw-heart {
        transition: background .8s steps(28);
        background-position: -2800px 0;
      }

      [type="checkbox"] {
        opacity: 0;
        cursor: pointer;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
      }

    </style>
     
      

   <?php


       for($i = 1; $i < $cont ; $i++){
        $j = $i - 1;

      echo (" 
      <div style=' float: left ; height:180px;display: flex; top: 15px '>
        <div class='card' style='width: 18rem;'>
             <img class='card-img-top' style='width 100px' src='images/cosplay2.jpg' alt='Card image cap'>
              <div class='card-body'>
                <h5 class='card-title'>".$retorno[$j][1]."</h5>
                <p class='card-tex'>".$retorno[$j][2]."</p>
               <div> <span class='tw-heart-box'>
                <input type='checkbox' name='name' value=".$j.">
                <span class='tw-heart'></span>
                </div>
              </span>
            </div>
        </div>
    </div>
      <br>

          


          ");
      
       }










   ?>
      <div><br></div>


    <!-- =================== /Corpo aqui =========================== -->
    

 

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>