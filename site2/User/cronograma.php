<?php
session_start();

require_once "../htdoc/conexão.php";
  $con = new conexao();

  $query = $con->query("SELECT * FROM cronograma");
  $retorno = $con->retornoAll();
  $cont = count($retorno);
  echo $cont;


?>
<!DOCTYPE html>

  <html>

    <head>    

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
          <img src="../temaimg/'.$retorno[$j][6].'"  height="20%" width="100%">
            <h3>'.$retorno[$j][1].'</h3>
            <p>'.$retorno[$j][2].'</p>
            <p>'.$retorno[$j][3].'<p/>
              <p>'.$retorno[$j][4].'<p/>
               <p>'.$retorno[$j][5].'<p/>
            <p>
             <!--<span class="tw-heart-box">
               <input type="checkbox"  name="nome" value="'.$i.'">
             <span class="tw-heart"></span>-->
            <input style="border-radius: 100px;" type="submit" value="favorite">
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





      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>

  </html>