<?php
session_start();
include_once("conexao.php");
?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="visao/estilocadlog.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="visao/cssfooter.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="visao/scriptcadlog.js"></script>
    <link rel="stylesheet" href="visao/stylemain.css">

    <title>Bicos - Cadastro</title>
  </head>
  <body>
  <div  class="d-block w-100  pt-5" style="background-image: url(visao/montain.jpg);">
          <div id="Navbar">

            <nav class="navbar navbar-dark p-2 text-white fixed-top" style="background-image: linear-gradient(to bottom right, rgb(21, 3, 37), rgb(0, 0, 0));">
              <button id="btnav" type="button" class="btn ml-n2" style=" border-radius: 0px 15px 15px 0px; border:rgb(47, 0, 92);  background-image: linear-gradient( rgb(0, 9, 48),rgb(53, 0, 97));">
                  <a class="navbar-brand" href="inicio.php" style="color: rgb(255, 255, 255); font-family: Quicksand;">          BICOS        </a></button>
  
  
          <ul class="nav justify-content-end">
  
            <li class="nav-item">
              <button id="btnav" type="button" class="btn btn-dark rounded-pill mr-3 px-1" style=" border:rgb(47, 0, 92);  background-image: linear-gradient( rgb(0, 9, 48),rgb(53, 0, 97));">
                  <a class="nav-link" href="login.php" style=" color: rgb(255, 255, 255); font-size: small; font-family: Quicksand;">ENTRAR</a></button>
                </li>
              </ul>
      </nav>  
      </div>

      <div id="main">
 
      <div class="container mt-5 ml-n2">

      <div>
      <div class="col-md-5 offset-md-1">

        <form  action="cadastrar.php" method="POST" class="mt-4 mt-md-0">

          <div class="form-group">            
            <label >Nome</label>
            <input name="nome" class="input form-control" type="text"  id="nome" maxlength="30"  >
          </div>

          <div class="form-group">
            <label >Sobrenome</label>
            <input name="sobrenome" class="input form-control" type="text" id="sobrenome" maxlength="50" >
          </div>

          <div class="form-group">
          <label >Usuário</label>
          <input name="usuario" class="input form-control" type="text" id="usuario" maxlength="15" >
          </div>

          <div class="form-group">
            <label>E-mail</label>
            <input name="email" class="input form-control" type="email" id="email" maxlength="100"  >
          </div>
          

          <div class="form-group">
            <label >Telefone</label>
            <input name="telefone" class="input form-control" type="phone"  id="telefone" maxlength="11">
          </div>          

          <div class="form-group">
            <label >Senha</label>
            <input name="senha" class="input form-control" type="pasword"  id="senha" maxlength="32"  >
          </div>

          <div class="form-group">
            <label >Repita sua senha</label>
            <input class="input form-control" type="pasword">
          </div>   
          
          <br>

          <button type="submit" id="btnav" 
          class="btn btn-primary btn-lg btn-block rounded-pill text-white" 
          style=" border:black; background-image: radial-gradient(rgb(29, 0, 53), rgb(0, 9, 48));"
          >Cadastrar</button>


        </form>
      </div>
    </div>    
  </div>
  <br>  
  <br>  
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        </div>
        <div class="footer">
            <ul class="social-network social-circle">
              <li><a class="icoTwitter" href="https://twitter.com/SistemaBicos" title="Twitter" target="blank"><i class="fa fa-twitter"></i></a></li>
              <li><a class="icoInstagram" href="https://www.instagram.com/sistemabicos/?hl=pt-br" title="Instagram" target="blank"><i class="fa fa-instagram"></i></a></li>
              <li><a class="icoFacebook" href="https://www.facebook.com/sistemabicos" title="Facebook (Ainda não disponível)" target="blank"><i class="fa fa-facebook"></i></a></li>
              
            </ul>
          </div>

    </body>
</html>