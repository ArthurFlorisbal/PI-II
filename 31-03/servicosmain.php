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

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="visao/cssfooter.css">

    <link rel="stylesheet" href="visao/stylemain.css">

    <title>Bicos - Início</title>
  </head>
  <body>
      <div   >
          <div id="Navbar" >


            <nav class="navbar navbar-dark p-2 text-white fixed-top" style="background-image: linear-gradient(to bottom right, rgb(21, 3, 37), rgb(0, 0, 0));">
              <button id="btnav" type="button" class="btn ml-n2" style=" border-radius: 0px 15px 15px 0px; border:rgb(47, 0, 92);  background-image: linear-gradient( rgb(0, 9, 48),rgb(53, 0, 97));">
                  <a class="navbar-brand" href="inicio.php" style="color: rgb(255, 255, 255); font-family: Quicksand;">          BICOS        </a></button>
  
  
          <ul class="nav justify-content-end">

          <li class="mr-3 px-1 mt-2"><a href="solicitarservico.php" style="color: rgb(255, 255, 255); font-family: Quicksand; text-decoration: none;">SOLICITAR SERVIÇO</a></li>

          <li class="mr-3 px-1 mt-2"><a href="mensagens.php" style="color: rgb(255, 255, 255); font-family: Quicksand; text-decoration: none;">MENSAGENS</a></li>
          <li class="mr-3 px-1 mt-2"><a href="pedidos.php" style="color: rgb(255, 255, 255); font-family: Quicksand; text-decoration: none;">PEDIDOS</a></li>

          <ul class="usericon userico">
                        <li><a class="icoUser" href="configuracoes.php" title=""><i class="fa fa-user-circle-o fa-2x"></i></a></li>
            
          </ul>

        </ul>
      </nav>  
      </div>

      <div class="main" >

      <br>
      <br>
      <br>
      <br>


      <div class="row">


      <div class="card mx-5" style="width: 18rem;">
          <img src="visao/fundo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
      </div>

      
      <div class="card mx-5" style="width: 18rem;">
          <img src="visao/fundo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
      </div>
      

      </div>

      <?php


        
		      //Receber o número da página
		      $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		      $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
        
		      //Setar a quantidade de itens por pagina
		      $qnt_result_pg = 2;
        
		      //calcular o inicio visualização
		      $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
        
		      $result_servico = "SELECT * FROM servico LIMIT $inicio, $qnt_result_pg";
		      $resultado_servico = mysqli_query($conexao, $result_servico);
		      while($row_servico = mysqli_fetch_assoc($resultado_servico)){
		      	echo "ID: " . $row_servico['id'] . "<br>";
		      	echo "Nome: " . $row_servico['descricao'] . "<br>";
		      	echo "E-mail: " . $row_servico['pagamento'] . "<br><hr>";
		      }
        
		      //Paginção - Somar a quantidade de usuários
		      $result_pg = "SELECT COUNT(id) AS num_result FROM servico";
		      $resultado_pg = mysqli_query($conexao, $result_pg);
		      $row_pg = mysqli_fetch_assoc($resultado_pg);
		      //echo $row_pg['num_result'];
		      //Quantidade de pagina 
		      $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
        
		      //Limitar os link antes depois
		      $max_links = 2;
		      echo "<a href='servicosmain.php?pagina=1'>Primeira</a> ";
        
		      for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
		      	if($pag_ant >= 1){
		      		echo "<a href='servicosmain.php?pagina=$pag_ant'>$pag_ant</a> ";
		      	}
		      }
        
		      echo "$pagina ";
        
		      for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
		      	if($pag_dep <= $quantidade_pg){
		      		echo "<a href='servicosmain.php?pagina=$pag_dep'>$pag_dep</a> ";
		      	}
		      }
        
		      echo "<a href='servicosmain.php?pagina=$quantidade_pg'>Ultima</a>";
        
		?>














    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   



        </div>

        <div class="footer fixed-bottom">
          <ul class="social-network social-circle">
            <li><a class="icoTwitter" href="https://twitter.com/SistemaBicos" title="Twitter" target="blank"><i class="fa fa-twitter"></i></a></li>
            <li><a class="icoInstagram" href="https://www.instagram.com/sistemabicos/?hl=pt-br" title="Instagram" target="blank"><i class="fa fa-instagram"></i></a></li>
            <li><a class="icoFacebook" href="https://www.facebook.com/sistemabicos" title="Facebook (Ainda não disponível)" target="blank"><i class="fa fa-facebook"></i></a></li>
            
          </ul>
        </div>
    
</div>    
    
    
    </body>
</html>