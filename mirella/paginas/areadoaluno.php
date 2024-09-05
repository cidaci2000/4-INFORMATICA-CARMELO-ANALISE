<?php
    session_start();
    include_once('conexao.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM aluno WHERE idaluno LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM aluno ORDER BY idaluno DESC";
    }
    $result = $conexao->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha conta|WakeUp House</title>
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="stylesheet" href="css/cssareaADM.css">

</head>
<body>
  <header>
    <div class="imagemlogo">
		<img src="midias/logo/wakeuphouse.png" width="50%">
	  </div>
	  
		<nav>
			<ul class="nav-list">
			<li><a href="páginas/cursos.html">Página Inicial</a></li>
			<li><a href="https://api.whatsapp.com/send/?phone=5545988043395&text&type=phone_number&app_absent=0"">Contato</a></li>
		  </ul>
		</nav>
   </header>
  <aside class="esquerda">
  <br>
  <div class="dadosesquerda">
  <img src="midias/logo/usuario.png" width="50px">
  <h1>Nome</h1>
  <br>
  <center>
  <button>Meus cursos</button><br><br><br>
  <button>Entrar em contato</button><br><br><br>
  <button>Sair</button>
  </center><br><br><br><br>
  <footer class="rodapeesquerda">@WAKEUPHOUSE</footer>
</div>
  </aside>
  <main class="conteudo">Conteúdo Do Site<br>
    <img src="midias/6.png">
    <br>

    
	<!-- Tag table inicia uma nova tabela. Parâmetro border permite escolher o  tamanho da borda. --> 
	
  </main>
  <footer class="rodape">@WAKEUPHOUSE</footer>
    
</body>
</html>