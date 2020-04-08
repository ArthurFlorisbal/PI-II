<?php
session_start();
include_once("conexao.php");
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="visao/stylemain.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="visao/cssfooter.css">

    <link rel="stylesheet" href="estilocadlog.css">



    <title>Bicos - Início</title>
  </head>
  <body>
      <div   >
          <div id="Navbar" >


            <nav class="navbar navbar-dark p-2 text-white fixed-top" style="background-image: linear-gradient(to bottom right, rgb(21, 3, 37), rgb(0, 0, 0));">
              <button id="btnav" type="button" class="btn ml-n2" style=" border-radius: 0px 15px 15px 0px; border:rgb(47, 0, 92);  background-image: linear-gradient( rgb(0, 9, 48),rgb(53, 0, 97));">
                  <a class="navbar-brand" href="servicosmain.php" style="color: rgb(255, 255, 255); font-family: Quicksand;">          BICOS        </a></button>
  
  
          <ul class="nav justify-content-end">

          <li class="mr-3 px-1 mt-2"><a href="mensagens.php" style="color: rgb(255, 255, 255); font-family: Quicksand; text-decoration: none;">MENSAGENS</a></li>
          <li class="mr-3 px-1 mt-2"><a href="pedidos.php" style="color: rgb(255, 255, 255); font-family: Quicksand; text-decoration: none;">PEDIDOS</a></li>

          <ul class="usericon userico">
                        <li><a class="icoUser" href="configuracoes.php" title=""><i class="fa fa-user-circle-o fa-2x"></i></a></li>
            
          </ul>

        </ul>
      </nav>  
      </div>

	  
	  <div class="main" >


	  <h1></h1>




      <br>
      <br>
      <br>
      <br>

		<div class="card mx-5" id="" style="background-color: rgba(49, 57, 109, 0.5); margin: 30px; border-radius: 25px;" >


    <form  action="servicosbanco.php" method="POST" class="card mx-5 mt-5" style="border: none; background-color: #00000000;" enctype="multipart/form-data">


    <h1 align="center" style="margin-top:50px; margin-bottom:50px; color: #7cffff;">Solicitar Serviço</h1>

    <div class="form-group">            
        <label >Foto</label><br>
			<input type="file" name="imagem" id="imagem" onchange="previewImagem()"> </input>
			<img style="width: 150px; height: 150px;"><br><br>
      </div>

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script>
			function previewImagem(){
				var imagem = document.querySelector('input[name=imagem]').files[0];
				var preview = document.querySelector('img');
				
				var reader = new FileReader();
				
				reader.onloadend = function () {
					preview.src = reader.result;
				}
				
				if(imagem){
					reader.readAsDataURL(imagem);
				}else{
					preview.src = "";
				}
			}
		</script>

      <div class="form-group">            
        <label >Descrição</label>
        <input name="descricao" class="input form-control" type="text" id="descricao" maxlength="500" >
      </div>

      <div class="form-group">
        <label >Pagamento</label>
        <input name="pagamento" class="input form-control" type="float" id="pagamento" maxlength="20" >
      </div>

      <div class="form-group">
        <label >Local</label>
        <input name="local" class="input form-control" type="text" id="local" maxlength="100" >
      </div>

      <div class="form-group">
      <label >Tempo estimado (Minutos)</label>
      <input name="tempo" class="input form-control" type="int" id="tempo" maxlength="4" >
      </div>


      <br>

      <button type="submit" id="btnav" 
      class="btn btn-primary btn-lg btn-block rounded-pill text-white" 
      style="align: center; border:black; background-image: radial-gradient(rgb(29, 0, 53), rgb(0, 9, 48)); margin-bottom: 30px; width: 60%; "
      >Solicitar</button>
		
		



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
    
</div>    
    
    
    </body>
</html>