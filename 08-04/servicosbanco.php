<?php
    session_start();
    include('conexao.php'); 


    $imagem = $_FILES['imagem'];
    $descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
    $pagamento = mysqli_real_escape_string($conexao, trim($_POST['pagamento']));
    $local = mysqli_real_escape_string($conexao, trim($_POST['local']));
    $tempo = mysqli_real_escape_string($conexao, trim($_POST['tempo']));
    
    
   // $sql = "INSERT INTO servico (foto, descricao, pagamento, tempo) 
   // VALUE ('$imagem', '$descricao', '$pagamento', '$tempo')";
    
/*
$imagem = $_FILES["imagem"];
$host = "localhost";
$username = "root";
$password = "";
$db = "ProjintII";
 
if($imagem != NULL) { 
    $nomeFinal = time().'.jpg';
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
        $tamanhoImg = filesize($nomeFinal); 
 
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 
 
        $conecta = mysqli_connect($host,$username,$password, $db) or die("Impossível Conectar"); 
 
        //@mysqli_select_db($db) or die("Impossível Conectar"); 
 
        mysqli_query($conecta , "INSERT INTO servico (foto, descricao, pagamento, tempo) 
        VALUE ('$mysqlImg', '$descricao', '$pagamento', '$tempo')") or
        die("O sistema não foi capaz de executar a query"); 
 
        unlink($nomeFinal);
         
            $conexao->close();
    
    header('Location: servicosmain.php');
    exit;

    }
} 
else { 
    echo"Você não realizou o upload de forma satisfatória."; 
} 
 


*/


function retorno($mensagem, $sucesso = false)
{
    // Criando vetor com a propriedades
    $retorno = array();
    $retorno['sucesso'] = $sucesso;
    $retorno['mensagem'] = $mensagem;
 
    // Convertendo para JSON e retornando
    return json_encode($retorno);
}


// Informações para conexão
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'ProjIntII';
$dsn = "mysql:host={$host};port=3306;dbname={$banco}";
 
try 
{
    // Conectando
    $pdo = new PDO($dsn, $usuario, $senha);
} 
catch (PDOException $e) 
{
    // Se ocorrer algum erro na conexão
    die($e->getMessage());
}


 
// Verificando se selecionou alguma imagem
if (!isset($_FILES['imagem']))
{
    echo retorno('Selecione uma imagem');
    exit;
}
 
// Recupera os dados dos campos
$foto = $_FILES['imagem'];
$nome = $foto['name'];
$tipo = $foto['type'];
$tamanho = $foto['size'];
 
// Validações básicas
// Formato
if(!preg_match('/^image\/(pjpeg|jpeg|png|gif|bmp)$/', $tipo))
{
    echo retorno('Isso não é uma imagem válida');
    exit;
}
 
// Transformando foto em dados (binário)
$conteudo = file_get_contents($foto['tmp_name']);
 
// Preparando comando
$stmt = $pdo->prepare('INSERT INTO servico (foto, descricao, pagamento, ' . 'local' . ', tempoestimado) VALUES (:conteudo, :descricao, :pagamento, :local, :tempoestimado)');
 
// Definindo parâmetros
$stmt->bindParam(':conteudo', $conteudo, PDO::PARAM_LOB);
$stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
$stmt->bindParam(':pagamento', $pagamento, PDO::PARAM_STR);
$stmt->bindParam(':local', $local, PDO::PARAM_STR);
$stmt->bindParam(':tempoestimado', $tempo, PDO::PARAM_INT);
 
// Executando e exibindo resultado
echo ($stmt->execute()) ? retorno('Foto cadastrada com sucesso', true) : retorno($stmt->errorInfo());


header('Location: servicosmain.php');
exit;



    ?>