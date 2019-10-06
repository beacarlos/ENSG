<?php
session_start();

require_once "htdoc/conexão.php";
  $con = new conexao();

  $query = $con->query("SELECT * FROM cronograma");
  $retorno = $con->retornoAll();
  $cont = count($retorno);
  echo $cont;


?>

<!DOCTYPE html>
<html lang="en">
<head>
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
    <!--=============teste de card manuasi-->
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  height: auto;
  width: auto;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  margin-top:20px;
}
</style>


<h2>Cronograma</h2>
<h6 style="color:red">Favorite para destacar o seu favorito  </h6>
<form type= method="POST">
<div class="row">
 <?php

      for($i = 1; $i < $cont+1 ; $i++){
        $j = $i - 1;


      echo ('

       <div class="column"> 
        <div class="card">
          <img src="temaimg/'.$retorno[$j][6].'"  height="20%" width="100%">
            <h3>'.$retorno[$j][1].'</h3>
            <p>'.$retorno[$j][2].'</p>
            <p>'.$retorno[$j][3].'<p/>
              <p>'.$retorno[$j][4].'<p/>
               <p>'.$retorno[$j][5].'<p/>
            <p>
             <span class="tw-heart-box">
               <input type="checkbox"  name="nome" value="'.$i.'">
             <span class="tw-heart"></span>
            </p>
      
        </span>
      </div>
   </div>
 
          ');
    }
      

   ?>

   </div>
</form>
   <p style="margin-bottom: 10px"></p>

  

   <?php
  

     if(isset($_POST['nome'])){
      $checkbox = $_POST[$i] ? "marcado (true)" : "desmarcado (false)"; 
        echo $checkbox;

       }
      


?>
    <!--=============teste de card manuasi-->

    <!-- =================== /Corpo aqui =========================== -->
    

    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <h2><a class="foot-logo" href="index.html"><img src="images/LogoEntreMundos.png" height="150" alt=""></a></h2>
                            <h2><a class="foot-logo" href="index.html"><img src="images/if02.png" height="100" alt=""></a></h2>


                            <ul class="d-flex flex-wrap align-items-center">
                                
                                
                                <!--
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                -->
                                <li><a target="_back" href="https://www.facebook.com/ACON.IFCE/"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_back" href="https://www.youtube.com/channel/UCIkmENGKFNKRz18T2_iNEtg"><i class="fa fa-youtube"></i></a></li>
                                <li><a target="_back" href="https://www.instagram.com/acon_ifce/"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Páginas</h2>

                        <ul>
                            <li><a href="index.html">Início</a></li>
                            <li><a href="about.html">Sobre</a></li>
                            <li><a href="cronograma.html">Cronograma</a></li>
                            <li><a href="atracoes.html">Atrações</a></li>
                            <li><a href="competicoes.html">Competições</a></li>
                            <li><a href="contact.html">Contato</a></li>
                            <li><a href="login.html">Login</a></li>
                        </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                           <!-- <h2>Latest News</h2>

                            <ul>
                                <li>
                                    <h3><a href="#">A new cause to help</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>

                                <li>
                                    <h3><a href="#">We love to help people</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>

                                <li>
                                    <h3><a href="#">The new ideas for helping</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>
                            </ul>-->
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>(85) 98844-4394</span></li>
                                <li><i class="fa fa-envelope"></i><span>acon.ifce@gmail.com</span></li>
                                <li><i class="fa fa-map-marker"></i><span> IFCE Maracanaú - Av. Parque Central - Distrito Industrial, Maracanaú - CE, 61919-140</span></li>
                            </ul>
                        </div><!-- .foot-contact -->


                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> Equipe de Desenvolvimento ACON</p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->

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